<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/page.css') }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section class="container mt-5  d-flex text-center justify-content-center align-items-center">
        <div class="col-lg-6 ">
            <div class="col-md-12 ">
                <div class="card card-primary">
                    <div class="card-header bg-white">
                        <a href=""><img class="img-fluid w-5" src="{{ asset('images/shababeek.png') }}"
                                style="height:130px" alt=""></a>
                        <h3>حساب عدد الالواح</h3>
                    </div>

                    <div class="card-body">
                        <form class="row  mt-2 " action="{{ route('addcta3') }}" method="post">
                            @csrf
                            <div class="my-1  col-4 ">
                                <input placeholder='طول' class="form-control" type="float" name="hight">
                            </div>

                            <div class="my-1  col-4 ">
                                <input placeholder="عرض" class="form-control" type="float" name="width">
                            </div>

                            <div class="my-1  col-4 ">
                                <input placeholder="عدد" class="form-control" type="float" name="number">
                            </div>

                            <div class="my-1  col-12 ">
                                <button type="submit" class="btn btn-primary col-12  "> اضافة </button>
                            </div>
                        </form>

                        @php
                            use App\Models\cta3;
                            $total = 0;
                            $cta3s = cta3::all();
                            foreach ($cta3s as $cta3) {
                                $total = $total + $cta3->total;
                            }
                            $m = 2.4 * 1.22;
                            $alwa7 = ceil($total / $m);
                            $mosta7lak = round($total / $m, 1);
                            $hader = $alwa7 - $mosta7lak;
                        @endphp


                        <div class="row">
                            <div class="col-12 my-1 ">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الطول</th>
                                            <th>العرض</th>
                                            <th>العدد</th>
                                            <th>
                                                <button class="btn btn-danger col-md-12 py-1"
                                                    href="{{ route('deleteall') }}"> حذف الكل </button>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="cta3-list">
                                        @foreach ($cta3s as $cta3)
                                            <tr>
                                                <th>#</th>
                                                <th>{{ $cta3->hight }}</th>
                                                <th>{{ $cta3->width }}</th>
                                                <th>{{ $cta3->number }}</th>
                                                <th>
                                                        <a href="{{ route('delete',['id'=> $cta3->id]) }}"
                                                            class=" delete btn btn-danger btn-sm col-12">حذف</a>
                                                </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="row mt-1 mx-1">
                            <div class="col-4">
                                <label class=""><strong>عدد الالواح</strong></label>
                                <input class="form-control" type="text" value="{{ $alwa7 }}">
                            </div>

                            <div class="col-4">
                                <label for="time"><strong>المستخدم</strong></label>
                                <input class="form-control" type="text" value="{{ $mosta7lak }}">
                            </div>

                            <div class=" col-4">
                                <label for=""> <strong>الهادر</strong></label>
                                <input type="text" class="form-control" value="{{ $hader }}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>
<!-- Template JS File -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="{{ asset('js/page.js') }}"></script>

</html>
