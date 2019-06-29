@extends('layouts.master')
  @section('title','Welcome To The Jungle')
  @section('content')
      <h1>BELAJAR LARAVEL</h1>
      <hr>
      <table>
        <thead>
          <tr>
            <th>alamat</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $row)
          <td>{{$row->alamat}}</td>
          @endforeach
        </tbody>

      </table>
  @endsection
