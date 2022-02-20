<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/page.css')}}">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <section class="container d-flex text-center justify-content-center align-items-center">
        <div class="  col-lg-6">
            <h1></h1>
            <h5></h5>
            <div class="col-md-12 ">
                <div class="card card-primary ">
                    <div class="card-header">
                        <a href=""><img class="img-fluid w-5" src="{{asset('images/shababeek.png')}}" style="height:130px" alt=""></a>
                        <h1>حساب عدد الالواح</h1>
                    </div>
                    <div class="card-body">
                            <form class=" mt-3" action="{{route('addcta3')}}" method="post">
                                @csrf
                                <input  placeholder='طول' class="my-1 form-control" type="number" name="hight">

                                <input placeholder="عرض" class="my-1 form-control" type="number" name="width">

                                <input placeholder="عدد" class="my-1 form-control" type="number" name="number">

                                <button type="submit"  class="btn btn-primary col-md-12 mt-3 add-cta3-btn "> اضافة </button>
                            </form>
                            <button   class="btn btn-primary col-md-12 mt-3 "  href="{{route('viewcta3s')}}"> عرض </button>

                            <div class="row">
                                <div class="col-12 my-3">
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>الطول</th>
                                            <th>العرض</th>
                                            <th>العدد</th>
                                            <th>اجراء</th>
                                          </tr>
                                        </thead>
                                        <tbody class="cta3-list">
                                            @foreach ($cta3s as $cta3)
                                            <tr>
                                                <th>#</th>
                                                <th>{{cta3->hight}}</th>
                                                <th>{{cta3->width}}</th>
                                                <th>{{cta3->number}}</th>
                                                <th>اجراء</th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                            <input type="submit" value="الاجمالى" class="btn btn-primary col-md-12 mt-3 ">
                            <div class="row mt-3">
                                <div class="col-md-4 "><input placeholder='عدد الالواح' class="form-control" type="text" id="date"></div>
                                <div class="col-md-4"><input placeholder="المستهلك" class="form-control" type="text"  id="time"></div>
                                <div class="col-md-4 "><input type="text" class="form-control" placeholder="الهادر" value=""></div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        </div>
    </section>
</body>
 <!-- Template JS File -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
 <script src="{{asset('js/page.js')}}" ></script>
</html>
