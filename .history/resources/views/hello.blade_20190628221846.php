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
      @foreach($blogs as $blog)
      <tr>
        <td>{{ $blog->nama }}</td>
        <td>{{ $blog->tempat }}</td>
        <td>{{ $blog->tahun }}</td>
        <td>{{ $blog->jurusan }}</td>
      </tr>  
      @endforeach

    </tbody>
  </table>
@endsection
</body>
</html>