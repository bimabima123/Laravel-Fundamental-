<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Blog;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = Blog::all();
        // dd($data);
        return view('hello' , ['blogs' => $data]);
    }

    public function show($id)
    {
        if($id == 10)
            $data = "INI ANGKA 10";
        else
            $data = $id;
            $users = DB::table('pengalaman')->get();
            return view('single',['data' => $data],['users' => $users ]);
        }
        
    }
    
    // insert
// DB::table('pengalaman')->insert(
//     [
//         ['namkeg' => 'BABA', 'tempat_pel' => 'DIMANA AJA', 'tahun' => '2019','deskripsi' => 'bababababababa']
//     ]
// );
    // edit
// DB::table('pengalaman')->where('namkeg','koko')
//                        ->update(
//                            ['namkeg' => 'koke','tempat_pel' => 'DISINI']
//                         );

// DB::table('pengalaman')->where('id_pengalaman','>',2)->delete();