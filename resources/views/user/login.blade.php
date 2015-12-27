@section('title')
User Login

@endsection

@section('content')
  <form class="" action="/login" method="post">
    <label for="name">Username:</label>
    <input type="text" name="name" value="" placeholder="Username">
    <label for="password">Password:</label>
    <input type="password" name="name" value="" placeholder="Password">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="button" name="login" value="login">
  </form>
@endsection
