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
        return view('hello' , ['blogs' => $data]);
    }

    public function show($id)
    {
        $blog = Blog::find($id);
        return view('single',['data' => $blog]);
    }

    public function insert()
    {
        return view('insert');
    }
    
    public function process_add(Request $request)
    {
       Blog::create(
            [
                'nama' => $request->name,
                'tempat' => $request->tempat,
                'tahun' => $request->tahun,
                'jurusan' => $request->jurusan
            ]
        );

        // dd($data);
        return redirect()->action('HelloController@index');
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('edit',['data' => $blog]);
    }

    public function update(Request $request, $id)
    {
        // dd($id);
         Blog::find($id)->update([
            'nama' => $request->name,
            'tempat' => $request->tempat,
            'tahun' => $request->tahun,
            'jurusan' => $request->jurusan,
        ]);

        return redirect()->action('HelloController@index');
    }

    public function destroy($id)
    {
        Blog::delete($id);
        return redirect()->action('HelloController@index');
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


// CRUD IN ELEQUENT
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
                 
            // Update Assigment
        // Blog::where('id_sekolah',5)->update([
        //     'nama' => 'Lampung',
        //     'jurusan' => 'ini kota sia'
        // ]);

        //delete
        // Blog::where('id_sekolah', 3)->delete();
        // dd($blog);