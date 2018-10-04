@extends("layout")

@section('title')
<title>Login | abTutorFinder</title>
@endsection

@section('content')

<div class="stdSignup">
    <div class="container">
      <div class="row">
          <div class="col-md-5 col-lg-5 col-xs-12 signUp">
              <div class="head-line"></div>
              <div class="from-content">
                <center>
                  <h3 class="head">Welcome Back!</h3>
                  <p>Login your account by filling the form below</p>
                  <br>
                </center>
                  	<form method="post" action="{{route('checklogin')}}">
					@csrf
					 @if($message=Session::get('error'))
	                  <div class="alert alert-danger alert-block" role="alert">
	                    <button class="close" type="button" data-dismiss="alert">x</button>
	                    {{$message}}
	                  </div>
	                  @endif

	                  @if(count($errors) > 0)
	                  <div class="alert alert-danger" role="alert">
	                    <ul>
	                      @foreach($errors->all() as $error)
	                      <li>{{$error}}</li>
	                      @endforeach
	                    </ul>
	                  </div>
	                  @endif
	                
					<div style="text-align: left;">
						<div class="form-group">
							<div class="fa fa-envelope icon"></div>
							<input type="email" name="email" class="form-control">
						</div>
						<br>

                 		<div class="form-group">
							<div class="fa fa-lock icon"></div>
							<input type="password" name="password" class="form-control">
						</div>
					</div>
			   
				<br>
				<center>
					<input class="btn btn-success hvr-shadow" style="width: 95%" type="submit" value="Login">
				</center>
				<br><br>
				<a href="#">Forgot your password?</a>
			 </form>
              </div>
          </div>
          <div class="col-md-7 col-lg-7 col-xs-12">
            <center>
              <img src="{{asset('images/tutor.png')}}" style="width:580px">
            </center>
          </div>
      </div>
    </div>
</div>
@endsection