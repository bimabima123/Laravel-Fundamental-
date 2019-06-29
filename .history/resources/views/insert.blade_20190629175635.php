@extends('layouts.master')
@section('name_table','Edit data Sekolah')
@section('content')
  <form action="/hello/{{$data->id}}" method="post">
    <input type="text" name="name" value=""><br>
    <input type="text" name="tempat" value=""><br>
    <input type="text" name="tahun" value=""><br>
    <input type="text" name="jurusan" value=""><br>

    <input type="submit" name="button" value="Tamabh"/>
    {{ csrf_field() }}    
  </form>
@endsection
