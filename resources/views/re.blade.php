<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{url('re')}}" method= "get">
		<input type="submit" value="这里是index方法" />
	</form>
 
	<form action="{{url('re/create')}}" method= "get">
		<input type="submit" value="这里是create方法" />
	</form>
		 

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
	       <form action="{{ url('re/') }}" method="post">
	       	{{csrf_field()}}
	           <div class="form-group">
	               <label>标题</label>
	               <input type="text" name="title" class="form-control" placeholder="输入标题" value="{{ old('title') }}">
	           </div>
	           <div class="form-group">
	               <label>URL</label>
	               <input type="text" name="url" class="form-control" placeholder="输入URL" value="{{ old('url') }}">
	           </div>
	           <fileupload-component></fileupload-component>
	           <button type="submit" class="btn btn-primary">这里是store方法</button>
	       </form>
	   </div>
	</div>

		
	<form action="{{url('re/123')}}" method= "get">
		<input type="submit" value="这里是show方法" />
		
	</form>
	<form action="{{url('re/123/edit')}}" method= "get">
		<input type="submit" value="这里是edit方法" />	
	</form>
	<form action="{{url('re/123')}}" method= "POST">
		<input type="submit" value="这里是update方法" />
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />	
	</form>
	<form action="{{url('re/123')}}" method= "post">
		<input type="submit" value="这里是destory方法" />
		<input type="hidden" name="_method" value="DELETE">
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
	</form>
	
</body>
</html>
