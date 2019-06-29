@extends('layouts.master')
@section('title','Data Sekolah') 
@section('name_table','SEKOLAH')
@section('content')
  <table border="1px">
    <thead>
      <tr>
        <th>Nama Sekolah</th>
        <th>Tempat Sekolah</th>
        <th>Tahun Lulus</th>
        <th>Jurusan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $blogs->nama }}</td>
        <td>{{ $blogs->tempat }}</td>
        <td>{{ $blogs->tahun }}</td>
        <td>{{ $blogs->jurusan }}</td>
        <td><a href="hello/{{$blogs->id_sekolah}}">Lihat Detail</td>
      </tr>  
    </tbody>
  </table>
@endsection
</body>
</html>