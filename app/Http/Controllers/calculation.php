<?php

namespace App\Http\Controllers;

use App\Models\cta3;
use Illuminate\Http\Request;

class calculation extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            "hight" => 'required',
            "width" => 'required',
            "number" => 'required'
        ]);

        $cta3 = new cta3();
        $cta3->hight = $request->hight;
        $cta3->width = $request->width;
        $cta3->number = $request->number;
        $cta3->total = $request->hight * $request->width * $request->number;

        $cta3->save();

        return view('page');
    }


    public function destroy($id)
    {
        $cta3 = cta3::find($id);
        $cta3->delete();
        return view('page');

    }

    public function deleteall()
    {
        cta3::truncate();
        return view('page');
    }
}
