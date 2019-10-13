<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add User</title>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
	<style>
		.error{
			color:red;
		}
	</style>
</head>
<body style="background-color: #e6e6e6">

<div class="container" style="margin-right: -420px">

        <div class="row centered-form" >
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Sign Up</small></h3>
			 			</div>
			 			<div class="panel-body">



			    		<form role="form" method="post" action="{{ URL::to('/store') }}">
			    			{{csrf_field()}}
			    			<div class="row">
			    				<label>Name</label>
			    				<div class="col-md-6">
			    					<div >
			                         <input type="text" name="name"  class="form-control" value="{{ old('name') }}" placeholder="Name">

			    					</div>
			    				</div>
			    				 <span class="error">{{ $errors->first('name') }}</span>
			    				

			    				
			    			</div>

			    			<div class="row">
			    				<label>Email</label>
			    				<div class=" col-md-6">
				    					<div class="form-group">
				    					<input type="email" value="{{ old('email') }}" name="email" class="form-control input-sm" placeholder="Email">
				    				  </div>
			    			   </div>
			    			</div>
			    			<span class="error">{{ $errors->first('email') }}</span>

			    			

			    			<div class="row">
			    				<label>Date of Birth</label>
			    				<div class=" col-md-6">
			    					<div class="form-group">
			    						<input type="date" value="{{ old('birth_date') }}" name="birth_date">
			    					</div>
			    				</div>
			    			</div>
			    			<span class="error">{{ $errors->first('birth_date') }}</span>

			    			<div class="row">
			    				<label>Salary</label>
			    				<div class=" col-md-6">
			    					<div class="form-group">
			    						<input type="number" value="{{ old('salary') }}" name="salary">
			    					</div>
			    				</div>

			    			</div>
			    			<span class="error">{{ $errors->first('salary') }}</span>

			    			<div class="row">
			    				<label>Password</label>
			    				<div class=" col-md-6">
			    					<div class="form-group">
			    						<input type="password" value="{{ old('password') }}" name="password">
			    					</div>
			    				</div>

			    			</div>
			    			<span class="error">{{ $errors->first('password') }}</span>


			    			<div class="row">
			    				<div class="col-md-2">
			    					<input type="submit" value="Register" class="btn btn-info">
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