<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <a href="/">Home</a>
    <a href="/hello">Blog</a>
  </header>
  <h1> @yield('name_table')</h1>
  <br>
  @yield('content')
  <footer>
    &copy; CopyRight 2019
  </footer>
</body>
</html>