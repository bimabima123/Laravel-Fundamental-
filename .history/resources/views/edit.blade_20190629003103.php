<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>INI BLOG EDIT</h1>

  <form action="" method="post">
  <input type="text" name="name" value="{{ $data->nama }}">
  <input type="text" name="tempat" value="{{ $data->tempat }}">
  <input type="text" name="tahun" value="{{ $data->tahun }}">
  <input type="text" name="jurusan" value="{{ $data->jurusan }}">

  </form>
</body>
</html>