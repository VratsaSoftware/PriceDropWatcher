@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Product Description' }}</div>

                    <div class="card-body">
                        {{$title}}
                    </div>
                    <div class="card-body">
                        {{$price}}
                    </div>
                    <div class="card-body">
                        <img src="{{$img}}" alt="pic">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

