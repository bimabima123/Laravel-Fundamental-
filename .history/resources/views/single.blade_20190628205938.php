@extends('layouts.master')
  @section('title','Welcome To The Jungle')
  @section('content')
      <h1>BELAJAR LARAVEL</h1>
      <hr>
      <table border=1>
        <thead>
          <tr>
            <th>alamat</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $row)
          <tr>
              <td>{{$row->alamat}}</td>
          </tr>
          @endforeach
        </tbody>

      </table>
  @endsection
