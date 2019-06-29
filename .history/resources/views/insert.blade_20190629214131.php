@extends('layouts.master')
@section('name_table','Edit data Sekolah')
@section('content')
  @if(count($errors) > 0)
    @foreach($errors as $error)
      <li>{{$error}}</li>

    @endforeach
  @endif
  <form action="process_add" method="post">
    <input type="text" name="name" value="" placeholder="Nama Sekolah"><br>
    <input type="text" name="tempat" value="" placeholder="Lokasi Sekolah"><br>
    <input type="text" name="tahun" value="" placeholder="Tahun Kelulusan"><br>
    <input type="text" name="jurusan" value="" placeholder="Nama Jurusan"><br>

    <input type="submit" name="button" value="Tambah"/>
    {{ csrf_field() }}    
  </form>
@endsection
