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
      <th>Nama Sekolah</th>
        
      </tr>
    </thead>
  </table>
  @foreach($blogs as $blog)
    {{ $blog->status }}
  @endforeach
</body>
</html>