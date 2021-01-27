@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ 'Product Description' }}</div>

                    <div class="card-body">
                        {{$data['title']}}
                    </div>
                    <div class="card-body">
                        {{$data['price']}}
                    </div>
                    <div class="card-body">
                        <img src="{{$data['img']}}" alt="pic">
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

