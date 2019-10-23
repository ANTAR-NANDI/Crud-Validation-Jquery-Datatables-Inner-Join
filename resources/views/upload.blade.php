<!DOCTYPE html>
<html>
<head>
	<title>Image Uploading</title>
</head>
<body>
<h2>Image Uploading</h2>
@if(Session::has('success'))
<span style="color: green">{{ Session::get('success') }}</span>

@endif
<form method="post" action="{{ URL::to('uploadimage') }}" enctype="multipart/form-data">
	{{csrf_field()}}
	<input type="file" name="filenames[]" multiple>
	<input type="submit" value="Submit">
</form>
@foreach($images as $e)
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img src="{{URL::to('uploads/images/'.$e->filename)}}" style="width:300px;height: 190px" >
		</div>
	</div>
	
</div>




@endforeach
</body>
</html>