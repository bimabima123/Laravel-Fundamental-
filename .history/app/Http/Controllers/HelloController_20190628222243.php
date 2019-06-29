<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Blog;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // dd($data);
        $blog = new Blog;
        $blog->nama = 'SMK AL IKHLAS';
        $blog->tempat = 'Carang Pulang';
        $blog->tahun = '2020';
        $blog->jurusan = 'jurusan ngejait tembok';
        $blog->save();

        $data = Blog::all();

        // dd($data);
        return view('hello' , ['blogs' => $data]);
    }

    public function show($id)
    {
        $blog = Blog::find('id_sekolah',$id);
        // dd($blog);
        return view('single',['data' => $blog]);
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