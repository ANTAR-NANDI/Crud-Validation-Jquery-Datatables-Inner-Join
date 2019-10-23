
<!DOCTYPE html>
<html>
<head>
	<title>Employees</title>
	<link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script

  src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>


  

<div class="card">
  <div class="card-header">
     My Profile
  </div>
  <div class="card-body">
      <h2>Name : {{$e->name}}</h2>
   <h2>Email : {{$e->email}}</h2>
      <h2> Salary : {{$e->salary}}</h2>
      <h2> Birth  date :{{$e->birth_date}}</h2>
  </div>
</div>

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
</body>
</html>