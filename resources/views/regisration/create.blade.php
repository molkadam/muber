@include('includes.header')

	
	<header class="masthead bg-primary text-white ">
      <div class="container">
        <h3 align="center">MUBER CAB SERVICE-REGISTER</h3>
        <div class="row">
        <div class="col-md-8 offset-md-2" style="">
        <form method="POST" action="{{ url('/register') }}">
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        	<div class="alert alert-danger">{{$error}}</div>
        @endforeach
        @endif
        {{ csrf_field() }}
        <div class="form-group">
    <label for="email">User Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="form-group">
    <label for="password_confirmation">Password Confirmation:</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
  </div>
  
  
  <button type="submit" class="btn btn-default">Register</button>
</form>
</div>
</div>
      </div>
    </header>


@include('includes.footer')