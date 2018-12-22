@extends('common.header')
@section('content')
  <body class="login2">
    <!-- Signup Screen -->
    <div class="login-wrapper">
      <a href="index.html"><img width="100" height="30" src="images/logo-login%402x.png" /></a>
      <!-- 访问admin/代表访问store -->
      <form method="post" action="{{ url('register/') }}">
        @csrf
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-user"></i></span><input name="name" value="{{old('name')}}" class="form-control" type="text" placeholder="请输入昵称">
          </div>
          <!-- 每次请求的所有视图中总是存在一个$errors 变量 -->
          @if($errors->has('name'))
            <label for="firstname" class="error">{{$errors->first('name')}}</label>
          @endif
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-envelope"></i></span><input name="email" value="{{old('email')}}" class="form-control" type="text" placeholder="请输入邮箱地址">
          </div>
          @if($errors->has('email'))
            <label for="firstname" class="error">{{$errors->first('email')}}</label>
          @endif
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-lock"></i></span><input name="password" class="form-control{{$errors->has('password') ? ' error':''}}" type="password" placeholder="请输入至少六位数的密码">
          </div>
          @if ($errors->has('password'))
            <label for="firstname" class="error">{{$errors->first('password')}}</label>
          @endif
        </div>
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"><i class="icon-ok"></i></span><input name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control" type="password" placeholder="重复上一个密码">
          </div> 
        </div>
        <div class="form-group">
          <label class="checkbox text-left"><input type="checkbox"><span>我同意</span></label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="注册">
        <div class="social-login clearfix">
          <a class="btn btn-primary pull-left facebook" href="index-2.html"><i class="icon-facebook"></i>Sign up with facebook</a><a class="btn btn-primary pull-right twitter" href="index-2.html"><i class="icon-twitter"></i>Sign up with twitter</a>
        </div>
        <p>
          Already have an account?
        </p>
        <a class="btn btn-default-outline btn-block" href="{{url('admin/login')}}">马上登录</a>
      </form>
    </div>
    <!-- End Signup Screen -->
  </body>

@endsection