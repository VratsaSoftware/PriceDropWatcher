@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Product Description' }}</div>

                    <div class="card-body">
                        {{$product->title}}
                    </div>
                    <div class="card-body">
                        {{$product->price}}
                    </div>
                    <div class="card-body">
                        <img src="{{$product->image}}" alt="pic">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

