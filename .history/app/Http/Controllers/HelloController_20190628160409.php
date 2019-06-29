<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
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

            DB::table('pengalaman')->insert(
                [
                    ['namkeg' => 'BABA', 'tempat_pel' => 'DIMANA AJA', 'tahun' => '2019','deskripsi' => 'bababababababa']
                ]
            );
            $users = DB::table('pengalaman')->get();

        return view('single',['data' => $data],['users' => $users ]);
    }

}
