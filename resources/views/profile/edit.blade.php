@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-header">Edit Profile</div>
                <div class="card-body">
                    {!! Form::model( $profile,  ['route' => ['profile.update', $profile->id],
                                                'method' => 'put',
                                                'enctype' => 'multipart/form-data']) !!}

                    <h1>{{ $profile->name }}</h1>
                    <p>{{ $profile->email }}</p>
                    @if( !empty( $profile->image ) )

                        <img src="{{ asset('storage/'.$profile->image ) }}" class="avatar img-circle img-thumbnail">
                    @else
                        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    @endif
                    <div class="row">
                        {!! Form::model( $profile,  ['route' => ['profile.update', $profile->id],
                                            'method' => 'put',
                                            'enctype' => 'multipart/form-data']) !!}
                        <p>Change your image</p>
                        @if($errors->has('image'))
                            <div class="col-sm-6  text-danger">
                                {{ $errors->first('image') }}
                            </div>
                        @endif

                        {!! Form::file('image',['class'=>'form-control']) !!}


                        <div class="form-group">
                            {!! Form::submit('edit', ['class' => 'btn btn-success']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
