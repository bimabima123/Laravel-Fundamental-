@extends(layouts.master)

  @section('content')
      <h1>INI SINGLE ID</h1>
      <h2>{{ $data }}</h2>
      @foreach($users as $user)
        <li>{{ $user }}</li>
      @endforeach

      @if(count($users) > 5)
          <h1>User nya lebih dari lima</h1>
      @else
          <h1>Usernya tidak lebih dari lima</h1>
      @endif
  @endsection

  
</body>
</html>