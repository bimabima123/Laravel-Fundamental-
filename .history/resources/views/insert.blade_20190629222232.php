@extends('layouts.master')
@section('name_table','Edit data Sekolah')
@section('content')

  @if(count($errors) > 0)
    <ul>
      @foreach($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>  
  @endif
  <form action="process_add" method="post">
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nama Sekolah"><br>
    <input type="text" name="tempat" value="" placeholder="Lokasi Sekolah"><br>
    <input type="text" name="tahun" value="" placeholder="Tahun Kelulusan"><br>
    <input type="text" name="jurusan" value="" placeholder="Nama Jurusan"><br>

    <input type="submit" name="button" value="Tambah"/>
    {{ csrf_field() }}    
  </form>
@endsection
