@extends('layouts.master')
  @section('title','Welcome To The Jungle')
  @section('content')
      <h1>INI SINGLE ID</h1>
      <h2>{{ $data }}</h2>
      <table border="1px">
        <thead>
          <tr>
            <th>NAMA KEGIATAN</th>
            <th>TEMPAT PELAKSANAAN</th>
            <th>TAHUN</th>
            <th>DESKRIPSI</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{ $user->namkeg }}</td>
              <td>{{ $user->tempat_pel }}</td>
              <td>{{ $user->tahun }}</td>
              <td>{!! substr($user->deskripsi,0,50) . '...' !!}</td>
            </tr>
          @endforeach
        </tbody>
      <table>
  @endsection
