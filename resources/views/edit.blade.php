<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add User</title>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Edit Your Profile!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="post" action="{{ URL::to('update/'.$employee->id) }}">
			    			{{csrf_field()}}
			    			<div class="row">
			    				<div class="col-md-4">
			    					
			    				</div>
			    				<div class="col-md-4">
			    					<div class="form-group">
			                         <input type="text" name="name"  class="form-control input-sm" placeholder="Name" value="{{ $employee->name }}">
			    					</div>
			    				</div>
			    				<div class="col-md-4">
			    					
			    				</div>

			    				
			    			</div>

			    			<div class="row">
			    				<div class=" col-md-6">
				    					<div class="form-group">
				    					<input type="email" name="email" class="form-control input-sm" placeholder="Email" value="{{ $employee->email }}">
				    				  </div>
			    			   </div>
			    			</div>

			    			

			    			<div class="row">
			    				<div class=" col-md-6">
			    					<div class="form-group">
			    						<input type="date" name="birth_date" value="{{ $employee->birth_date }}">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="row">
			    				<div class=" col-md-6">
			    					<div class="form-group">
			    						<input type="number" name="salary" value="{{ $employee->salary }}">
			    					</div>
			    				</div>

			    			</div>
                         
                         <div class="row">
			    				<div class=" col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" value="{{ $employee->password }}">
			    					</div>
			    				</div>

			    			</div>
			    			
			    			<div class="row">
			    				<div class="col-md-6">
			    					<input type="submit" value="Update" class="btn btn-info" >
			    				</div>
			    			</div>
			    			
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>











<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>

</body>
</html>