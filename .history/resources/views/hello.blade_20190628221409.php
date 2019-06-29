@extends('layouts.master')

@section('content')
  <table border="1px">
    <thead>
      <tr>
        <th>Nama Sekolah</th>
        <th>Tempat Sekolah</th>
        <th>Tahun Lulus</th>
        <th>Jurusan</th>
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