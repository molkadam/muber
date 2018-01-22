@include('includes.header')

	
	<header class="masthead bg-primary text-white ">
      <div class="container">
        <h3 align="center">MUBER CAB SERVICE- (Driver) Edit </h3>
        <div class="row">
        <div class="col-md-8 offset-md-2" style="">
        <form method="POST" action="{{ url('/driver/'.$dr->id) }}">
        <input name="_method" type="hidden" value="PUT">
        {{ csrf_field() }}
        <div class="form-group">
    <label for="email">User Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$dr->name}}">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" name="email" value="{{$dr->email}}">
  </div>
  <div class="form-group">
    <label for="cabno">Cab Register Number:</label>
    <input type="text" class="form-control" id="cabno" name="cabno" value="{{$dr->cabno}}">
  </div>
 
  <button type="submit" class="btn btn-default">Update</button>
</form>
</div>
</div>
      </div>
    </header>


@include('includes.footer')