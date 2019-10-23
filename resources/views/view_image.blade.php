<!DOCTYPE html>
<html>
<head>
	<title>Image Uploading</title>
</head>
<body>
<h2>Image viewing</h2>
@foreach($images as $e)
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<img src="{{URL::to('uploads/images/'.$e->filename)}}" style="width:300px;height: 150px" >
		</div>
	</div>
	
</div>


@endforeach
</body>
</html>