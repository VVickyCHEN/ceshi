@extends('common.header')
@section('content')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/post.css') }}">
<!-- 最外面	 -->
<div class="main">
	<div class="row">
		<div class="justify-content">

			<div id="app">
			   <div class="container">
			       @if ($errors->any())
			           <div class="alert alert-danger">
			               <ul>
			                   @foreach ($errors->all() as $error)
			                       <li>{{ $error }}</li>
			                   @endforeach
			               </ul>
			           </div>
			       @endif
			       <form action="{{ url('post/') }}" method="post">

			       	@csrf
			       	<!-- 缺少会报419错误 -->
			       	<!-- Sorry, your session has expired. Please refresh and try again -->
			           <div class="form-group">
			               <label>标题</label>
			               <input type="text" name="title" class="form-control" placeholder="输入标题" value="{{ old('title') }}">
			           </div>
			           <div class="form-group">
			               <label>URL</label>
			               <input type="text" name="url" class="form-control" placeholder="输入URL" value="{{ old('url') }}">
			           </div>
			           <fileupload-component></fileupload-component>
			           <button type="submit" class="btn btn-primary">提交</button>
			       </form>
			   </div>
			</div>

		</div>
	</div>
</div>
	

@endsection
