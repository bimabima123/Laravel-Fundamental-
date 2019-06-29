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
          <tr>
            @foreach($users as $user)
              <td>{{ $user->namkeg }}</td>
            @endforeach
          </tr>
        </tbody>
      <table>

      @if(count($users) > 5)
          <h1>User nya lebih dari lima</h1>
      @else
          <h1>Usernya tidak lebih dari lima</h1>
      @endif
  @endsection
