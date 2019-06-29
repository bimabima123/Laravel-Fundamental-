<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <table>
    <thead>
      <tr>
        <th>Nama Sekolah</th>
        <th>Tempat Sekolah</th>
        <th>Nama Sekolah</th>
        <th>Tahun Lulus</th>
        <th>Jurusan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($blogs as $blog)
      <tr>
        <td>{{ $blog->nama }}</td>
        <td>{{ $blog->tempat }}</td>
        <td>{{ $blog->nama }}</td>
        <td>{{ $blog->nama }}</td>
      </tr>  
      @endforeach

    </tbody>
  </table>
</body>
</html>