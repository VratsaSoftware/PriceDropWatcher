{{-- @extends('layouts.admin') --}}
<div class="card">
	<form class="form-horizontal">
		<div class="card-body">
		    <nav class="navbar navbar-inverse">
			  	<div class="container-fluid">
				    <ul class="nav navbar-nav">
				      <li><a href='{{route('user.show', $userId)}}'>Personal Info</a></li>
				       <li class="active">
					      	<p class="card-title">Edit</p>
					    </li>
				      <li><a href="">Settings</a></li>
				    </ul>
			  	</div>
			</nav>
			<div class="form-group row">
		        <img src="" width="200">
		    </div>
	      	<div class="form-group row">
		        <label for="fname"
		            class="col-sm-3 text-end control-label col-form-label">Name
		        </label>
		        <div class="col-sm-9">
		            <input type="text" class="form-control" id="fname"
		                placeholder="{{$user->name}}">
             	</div>	
		    </div>
		   <div class="form-group row">
		        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
		        <div class="col-sm-9">
		            <input type="text" class="form-control" id="fname"
		                placeholder="{{$user->email}}">
             	</div>	
		    </div>
		<div class="border-top">
		    <div class="card-body">
		        <button type="button" class="btn btn-primary">Submit</button>
		    </div>
		</div>
	</form>
</div>