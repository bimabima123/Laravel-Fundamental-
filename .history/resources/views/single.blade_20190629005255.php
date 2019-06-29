@extends('layouts.master')
  @section('title','Welcome To The Jungle')
  @section('name_table' ,'DETAIL SEKOLAH')
  @section('content')
      <h1>BELAJAR LARAVEL</h1>
      <hr>
      <table border="1px">
        <thead>
          <tr>
            <th>Nama</th>
            <th>Tempat</th>
            <th>Tahun</th>
            <th>Jurusan</th>
          </tr>
        </thead>
        <tbody>
              <td>{{$data->nama}}</td>
              <td>{{$data->tempat}}</td>
              <td>{{$data->tahun}}</td>
              <td>{{$data->jurusan}}</td>
          </tr>
        </tbody>
      </table>
  @endsection
