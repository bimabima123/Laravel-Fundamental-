@extends('layouts.master')
  @section('title','Welcome To The Jungle')
  @section('content')
      <h1>BELAJAR LARAVEL</h1>

      <hr>
      @foreach($data as $row)
      <td>{{ $row->alamat}}</td>
      @endforeach
  @endsection
