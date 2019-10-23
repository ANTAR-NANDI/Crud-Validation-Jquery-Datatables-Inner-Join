<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
	<meta charset="utf-8">
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
	<div class="container">
	<h3>List of Employee</h3>
<table class="table table-striped table-dark" id="myTable">
  <thead>
    <tr>
      <!-- <th scope="col">ID</th> -->
       <th scope="col" style="background-color: gray">PDF</th>
      <th scope="col" style="background-color: gray">NAME</th>
      <th scope="col" style="background-color: #ec5e5e">EMAIL</th>
      <th scope="col" style="background-color: #ea59d3">DATE OF BIRTH</th>
      <th scope="col" style="background-color: #5bc0de">SALARY</th>
      <th scope="col" style="background-color: #62c462">EDIT</th>
        <th scope="col" style="background-color: #fbb450">DELETE</th>
    </tr>
  </thead>
    <tbody>
    	@foreach($employees as $a)
    	<tr>
    	  <td><a href="{{ URL::to('pdf/'.$a->id)}}">PDF</a></td>
            <td>{{ $a->name }}</td>
            <td>{{ $a->email }}</td>
            <td>{{ $a->birth_date }}</td>
            <td>{{ $a->salary }}</td>
            <td ><a href="{{ URL::to('edit/'.$a->id)}}" class="btn btn-info btn-sm">Edit </a></td>
            <td>
            	<!-- <td> <a href="{{ URL::to('delete/'.$a->id)}}" class="btn btn-info btn-xm">Delete</a> </td> -->
            	 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#{{ $a->id }}">Delete</button>

					<div id="{{ $a->id }}" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal">&times;</button>
					        <h4 class="modal-title">Delete Confirmation</h4>
					      </div>
					      <div class="modal-body">
					        <p>Do You Want to Delete??</p>
					      </div>
					      <div class="modal-footer">
					      	 <a href="{{ URL::to('delete/'.$a->id)}}" class="btn btn-danger">Delete</a>
					        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					      </div>
					    </div>

					  </div>
                    </div>
                </td>
        </tr>
        @endforeach

    </tbody>


   </table>
</div>
 <a href="{{ URL::to('add') }}" class="btn btn-primary" style="margin: auto;margin-left: 30px">Insert</a>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>
</html>