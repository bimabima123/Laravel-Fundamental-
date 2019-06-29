<?php

namespace App\Http\Controllers;
namespace  Illuminate\Support\Facades\DB;

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
            $data = "INI ANGKA 10";
        else
            $data = $id;
            $users = DB::select;
        return view('single',['data' => $data],['users' => $users ]);
    }

}
