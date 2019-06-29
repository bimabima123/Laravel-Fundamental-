@extends('layouts.master')
@section('name_table','Edit data Sekolah')
@section('content')
  <form action="/hello/{{$data->id}}" method="post">
    <input type="hidden" name="_method" value="PUT" />
    <input type="text" name="name" value="{{ $data->nama }}"><br>
    <input type="text" name="tempat" value="{{ $data->tempat }}"><br>
    <input type="text" name="tahun" value="{{ $data->tahun }}"><br>
    <input type="text" name="jurusan" value="{{ $data->jurusan }}"><br>

    <input type="submit" name="button" value="edit"/>
    {{ csrf_field() }}    
  </form>
@endsection
