{{-- @extends('layouts.admin')
@section('content')
@endsection --}}

<div class="row">
	<div class="col-sm-6 offset-sm-3">
		<h2>Edit profile</h2>
		<form action="" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="form-group">
				<p>
					<img src="" width="200">
				</p>				
				<label for="filename">
					Добавете снимка
				</label>
				<input type="file" name="filename" id="filename">
				@if($errors->has('filename'))
					<div class="col-sm-7 col-sm-offset-1 text-danger">
						{{ $errors->first('filename') }} 
					</div>
				@endif
			</div>
			<div class="form-group">				
				<label for="model">
					Име
				</label>
				<input type="text" id="" class="form-control" name="model" value="{{$user->name}}">
				@if($errors->has('model'))
				<div class="col-sm-7 col-sm-offset-1 text-danger">
					{{ $errors->first('model') }} 
				</div>
				@endif
			</div>
				<div class="form-group">				
				<label for="model">
					Email
				</label>
				<input type="text" id="" class="form-control" name="model" value="{{$user->email}}">
				@if($errors->has('model'))
				<div class="col-sm-7 col-sm-offset-1 text-danger">
					{{ $errors->first('model') }} 
				</div>
				@endif
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Edit" class="btn btn-success">
			</div>
		</form>
	</div>
</div>	

{{-- @endsection --}}