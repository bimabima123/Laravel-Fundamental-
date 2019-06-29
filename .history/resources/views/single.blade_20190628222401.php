@extends('layouts.master')
  @section('title','Welcome To The Jungle')
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
            <th>alamat</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $row)
          <tr>
              <td>{{$row->alamat}}</td>
              <td>{{$row->alamat}}</td>
              <td>{{$row->alamat}}</td>
              <td>{{$row->alamat}}</td>
              <td>{{$row->alamat}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
  @endsection
