{{-- @extends('layouts.admin')
@section('content')
@endsection --}}

{{-- <style>
	<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
body {
    background: #EAEDF4;
    font-family: 'Roboto', sans-serif
}

.card {
    width: 300px;
    border: none;
    border-radius: 15px
}

.media {
    padding: 30px 30px 15px
}

span.text-muted {
    font-size: 12px
}

p.pt-1 {
    font-size: 13px;
    color: #8686AC;
    cursor: pointer
}

.fas {
    color: #ABB0B4
}

.fa-angle-right {
    color: #E6E6E6
}

span {
    font-size: 14px
}

.justify-content-between {
    height: 50px;
    margin-bottom: 10px
}

.justify-content-between:hover {
    background-color: #EFF3FF;
    color: #7175B5;
    cursor: pointer
}

.justify-content-between:hover .fas {
    color: #7175B5
}

.justify-content-between.sample {
    background-color: #EFF3FF;
    color: #7175B5
}

.preview {
    color: #7175B5
}
</style>

<div class="container d-flex justify-content-center">
    <div class="card mt-5 pb-3">
        <div class="media"> <img src="https://imgur.com/4M5LpBs.png" class="mr-3" height="80">
            <div class="media-body">
                <h5 class="mt-1 mb-0">Sandara Elliot</h5> <span class="text-muted">Los Angeles</span>
                <p class="pt-1">Edit profile</p>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center p-3 mx-3">
            <div class="d-flex flex-row align-items-center"><i class="fas fa-suitcase"></i>
                <div class="d-flex flex-row align-items-start ml-3"><span>Upcoming trips</span></div>
            </div>
            <div class="d-flex flex-row align-items-center mt-2"><i class="fas fa-angle-right"></i></div>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center p-3 mx-3 sample">
            <div class="d-flex flex-row align-items-center"><i class="fas fa-bell preview"></i>
                <div class="d-flex flex-row align-items-start ml-3"><span>Notification settings</span></div>
            </div>
            <div class="d-flex flex-row align-items-center mt-2"><i class="fas fa-angle-right preview"></i></div>
        </div>
        <div class="d-flex flex-row justify-content-between align-items-center p-3 mx-3">
            <div class="d-flex flex-row align-items-center"><i class="fas fa-money-bill-wave-alt"></i>
                <div class="d-flex flex-row align-items-start ml-3"><span>Payment history</span></div>
            </div>
            <div class="d-flex flex-row align-items-center mt-2"><i class="fas fa-angle-right"></i></div>
        </div>
    </div>
</div> --}}

<style type="text/css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">W
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</style>
<div class="row">
	<div class="col-sm-6 offset-sm-3">
		<h2>Information</h2>
		<p>
			<img src="" width="200"> <br>

		</p>
		<p>
			{{ $user->name }}
		</p>
		<p>
			{{$user->email}}
		</p>
		<p>
			{{$user->email_verified_at}}
		</p>
		<p>
			{{$user->created_at}}
		</p>
		<p>
			{{$user->updated_at}}
		</p>
		<p>
			{{$user->role_id}}
		</p>
		<a href="{{route('EditProfile')}}" class="btn btn-warning">
			Edit
		</a>
		
	</div>
</div>	