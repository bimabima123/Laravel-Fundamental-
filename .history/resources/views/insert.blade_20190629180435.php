@extends('layouts.master')
@section('name_table','Edit data Sekolah')
@section('content')
  <form action="" method="post">
    <input type="text" name="name" value="" placeholder="Nama Sekolah"><br>
    <input type="text" name="tempat" value=""><br>
    <input type="text" name="tahun" value=""><br>
    <input type="text" name="jurusan" value=""><br>

    <input type="submit" name="button" value="Tambah"/>
    {{ csrf_field() }}    
  </form>
@endsection
