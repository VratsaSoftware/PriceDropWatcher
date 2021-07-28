@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                            <hr>
                            <div class="container bootstrap snippet">
                                <div class="row">
                                    <div class="col-sm-10"><h1>{{ Auth::user()->name }}</h1></div>
                                    <div class="col-sm-2">
                                            @if(!empty(Auth::user()->image))
                                            <img title="profile image" class="img-circle img-responsive" src="{{asset('storage/'.Auth::user()->image)}}" alt="profile">
                                            @else
                                            <img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100" alt="profile">
                                                @endif
                                    </div>
                                </div>
                                <div class="col-xs-8">
                                    <ul class="list-group profile-nav">
                                        <li class="list-group-item {{(request()->route()->getName()=='dashboard')?'active':''}}"><a href="{{route('dashboard')}}">Dashboard </a></li>
                                        <li class="list-group-item {{(request()->route()->getName()=='edit_profile')?'active':''}}"><a href="{{ route('edit_profile', Auth::user()->id ) }}">Edit Profile</a></li>
                                        <li class="list-group-item {{(request()->route()->getName()=='change_password')?'active':''}}"><a href="{{route('change_password')}}">Change Password</a></li>
                                        <li class="list-group-item {{(request()->route()->getName()=='add_product')?'active':''}}"><a href="{{route('products.create')}}">Add Product</a></li>

                                    </ul>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"><!--left col-->



                                        <ul class="list-group">
                                            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                                            <li class="list-group-item text-right"><span class="pull-left"><strong>LINKS</strong></span> 125</li>
                                            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                                            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                                        </ul>

                                    </div><!--/col-3-->

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="home">
                                            <hr>


                                            <hr>


                                        </div>
                                    </div>
                                </div>

                            </div>

@endsection
