@extends('layouts.admin')
@section('content')
	<div class="card">
		<form class="form-horizontal">
			<div class="card-body">
				<nav class="navbar navbar-inverse">
				  	<div class="container-fluid">
					    <ul class="nav navbar-nav">
						    <li class="active">
						      	<p class="card-title">Personal Info</p>
						    </li>
					      <li><a href='{{route('user.edit', $userId)}}'>Edit</a></li>
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
			            <p class="col-sm-9">{{$user->name}}</p>
	             	</div>	
			    </div>
			    <div class="form-group row">
			        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Email</label>
			        <div class="col-sm-9">
			            <p class="form-control">{{$user->email}}</p>
			        </div>
			    </div>
		     	<div class="form-group row">
			        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Created at</label>
			        <div class="col-sm-9">
			            <p class="form-control">{{$user->created_at}}</p>
			        </div>
			    </div>
			    <div class="form-group row">
			        <label for="lname" class="col-sm-3 text-end control-label col-form-label">Last update</label>
			        <div class="col-sm-9">
			            <p class="form-control">{{$user->updated_at}}</p>
			        </div>
			    </div>

			</div>
		</form>
	</div>
@endsection