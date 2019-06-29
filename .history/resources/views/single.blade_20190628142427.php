<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
    <h1>INI SINGLE ID</h1>
    <h2>{{ $data }}</h2>
    @foreach($users as $user)
      <li>{{ $user }}</li>
    @endforeach

    @if(count($user) < 5)
        <h1>User nya lebih dari lima</h1>
    @else
        <h1>Usernya tidak lebih dari lima</h1>
    @endif
</body>
</html>