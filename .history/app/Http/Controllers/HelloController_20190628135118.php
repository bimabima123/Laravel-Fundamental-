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
        if($id == 10)
            $data = view('')
        else
            $data = $id;
        return $data;
    }
}
