<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return view('hello');
    }

    public function show($id)
    {
        if($id == array(1,2,3,4,5,6,7,8,9,0))
            $data = "INI ANGKA 10";
        else
            $data = $id;
        return view('single',['data' => $data]);
    }

}
