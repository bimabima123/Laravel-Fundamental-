@extends('layouts.master')
  @section('title','Welcome To The Jungle')
  @section('content')
      <h1>INI SINGLE ID</h1>
      <h2>{{ $data }}</h2>
      <table border="1px">
        <thead>
          <tr>
            <th>NAMA KEGIATAN</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{ $user->namkeg }}</td>
              <td>{{ $user->namkeg }}</td>
            </tr>
          @endforeach
        </tbody>
      <table>

      @if(count($users) > 5)
          <h1>User nya lebih dari lima</h1>
      @else
          <h1>Usernya tidak lebih dari lima</h1>
      @endif
  @endsection
