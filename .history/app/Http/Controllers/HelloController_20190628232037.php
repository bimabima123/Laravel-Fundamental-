<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Blog;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // insert biasa        
            // $blog = new Blog;
            // $blog->nama = 'SMK AL IKHLAS';
            // $blog->tempat = 'Carang Pulang';
            // $blog->tahun = '2020';
            // $blog->jurusan = 'jurusan ngejait tembok';
            // $blog->save();

        //insert mass Asigment
            // Blog::create([
            //     'nama'=>'SMK BOJONG GEDE',
            //     'tempat'=>'Setu manuk',
            //     'tahun'=>'2018',
            //     'jurusan'=>'Jurusan Masak',
            // ]);

        //update
        // $blog = Blog::where('tahun', '2018')->first();
        // $blog->tahun = '2030';
        // // dd($blog);
        // $blog->save();
                 

        Blog::where('id_sekolah',5)->update([
            'nama' => 'Lampung',
            'description' => 'ini kota sia'
        ]);
        dd($blog);
        $data = Blog::all();

        // dd($data);
        return view('hello' , ['blogs' => $data]);
    }

    public function show($id)
    {
        $blog = Blog::where('id_sekolah',$id)->get();
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