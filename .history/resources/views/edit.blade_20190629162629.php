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

  <form action="/hello/{{$data->id}}" method="post">
    <input type="hidden" name="_method" value="PUT" />
    <input type="text" name="name" value="{{ $data->nama }}"><br>
    <input type="text" name="tempat" value="{{ $data->tempat }}"><br>
    <input type="text" name="tahun" value="{{ $data->tahun }}"><br>
    <input type="text" name="jurusan" value="{{ $data->jurusan }}"><br>

    <input type="submit" name="button" value="edit"/>
    {{ csrf_field() }}    
  </form>
</body>
</html>