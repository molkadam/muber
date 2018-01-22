@include('includes.header')

	
	<header class="masthead bg-primary text-white ">
      <div class="container">
        <h3 align="center">MUBER CAB SERVICE-LOGIN</h3>
        <div class="row">
        <div class="col-md-8 offset-md-2" style="">
        <form method="POST" action="{{ url('/login') }}">
        
        {{ csrf_field() }}
  
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
 
  <button type="submit" class="btn btn-default">Login</button>
</form>
<a href="{{ url('/register') }}" style="color:#ffffff; font-size: 20px;">Register Here</a>
</div>
</div>
      </div>
    </header>


@include('includes.footer')