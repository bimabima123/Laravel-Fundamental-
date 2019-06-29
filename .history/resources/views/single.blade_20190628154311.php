@extends('layouts.master')
  @section('title','Welcome To The Jungle')
  @section('content')
      <h1>INI SINGLE ID</h1>
      <h2>{{ $data }}</h2>
      <table border="1px">
        <tr>
          <th>NAMA KEGIATAN</th>
        </tr>
        <tr>
          @foreach($users as $user)
            <td>{{ $user->namk eg }}</td>
          @endforeach
        </tr>
      <table>

      @if(count($users) > 5)
          <h1>User nya lebih dari lima</h1>
      @else
          <h1>Usernya tidak lebih dari lima</h1>
      @endif
  @endsection
