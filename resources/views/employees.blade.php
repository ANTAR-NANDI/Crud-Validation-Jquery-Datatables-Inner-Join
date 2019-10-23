<!DOCTYPE html>
<html>
<head>
	<title>Employees</title>
	<link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
<h3>List of Employees</h3>
<table id="myTable">
	<thead>
		<th scope="col" style="background-color: #ea59d3">EMPLOYEE_ID</th>
		 <th scope="col" style="background-color: gray">COUNTRY</th>
      <th scope="col" style="background-color: #ec5e5e">CITY</th>
      
      <th scope="col" style="background-color: #5bc0de">EMAIL</th>
      <th scope="col" style="background-color: #62c462">SALARY</th>
        <th scope="col" style="background-color: #fbb450">BIRTH DATE</th>
	</thead>
	<tbody>
		@foreach($employees as $e)
		<tr>
			<td>{{$e->employees_id}}</td>
			<td>{{$e->country}}</td>
			<td>{{$e->city}}</td>
			<td>{{$e->email}}</td>
			<td>{{$e->salary}}</td>
			<td>{{$e->birth_date}}</td>
			
		</tr>
    @endforeach
	</tbody>



</table>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>

</body>
</html>