@extends('common.header')
@section('content')
  <body class="login2">
    <!-- Login Screen -->
    <div class="login-wrapper">
      <a href="index.html"><img width="100" height="30" src="{{asset('images/logo-login%402x.png')}}" /></a>
      <form action="" method="post">
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-envelope"></i></span><input class="form-control" placeholder="Email" type="text">
          </div>

          @if($errors->has('email'))
          <label for="firstname" class="error">{{$errors->first('email')}}</label>
          @endif

        </div>  
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-lock"></i></span><input class="form-control" placeholder="Password" type="text">
          </div>

          @if($errors->has('password'))
          <label for="firstname" class="error">{{$errors->first('password')}}</label>
          @endif

        </div>
        <a class="pull-right" href="#">Forgot password?</a>
        <div class="text-left">
          <label class="checkbox"><input type="checkbox"><span>Keep me logged in</span></label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in">
        <div class="social-login clearfix">
          <a class="btn btn-primary pull-left facebook" href="index-2.html"><i class="icon-facebook"></i>Login with facebook</a><a class="btn btn-primary pull-right twitter" href="index-2.html"><i class="icon-twitter"></i>Login with twitter</a>
        </div>
      </form>
      <p>
        Don't have an account yet?
      </p>
      <a class="btn btn-default-outline btn-block" href="{{url('register')}}">Sign up now</a>
    </div>
    <!-- End Login Screen -->
  </body>
@endsection