<!DOCTYPE html>
<html>
<head>
	<title>Excel File</title>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
    <h2>Excel File Upload</h2>
    <form method="POST" action="{{  URL::to('import')}}" enctype="multipart/form-data">
     @csrf
    	<input type="file" name="file">
   <button class="btn btn-primary">Submit</button>

    </form>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
</body>
</html>