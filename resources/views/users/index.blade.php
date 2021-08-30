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
                                        <img title="profile image" class="img-circle img-responsive"
                                             src="{{asset('storage/'.Auth::user()->image)}}" alt="profile">
                                    @else
                                        <img title="profile image" class="img-circle img-responsive"
                                             src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"
                                             alt="profile">
                                    @endif
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <ul class="list-group profile-nav">
                                    <li class="list-group-item {{(request()->route()->getName()=='dashboard')?'active':''}}">
                                        <a href="{{route('dashboard')}}">Dashboard </a></li>
                                    <li class="list-group-item {{(request()->route()->getName()=='edit_profile')?'active':''}}">
                                        <a href="{{ route('edit_profile', Auth::user()->id ) }}">Edit Profile</a></li>
                                    <li class="list-group-item {{(request()->route()->getName()=='change_password')?'active':''}}">
                                        <a href="{{route('change_password')}}">Change Password</a></li>
                                    <li class="list-group-item {{(request()->route()->getName()=='add_product')?'active':''}}">
                                        <a href="{{route('products.create')}}">Add Product</a></li>

                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-sm-12"><!--left col-->

                                    <ul class="list-group">
                                        <li class="list-group-item text-muted">Activity <i
                                                class="fa fa-dashboard fa-1x"></i></li>
                                        <li class="list-group-item text-right"><span
                                                class="pull-left"><strong>LINKS</strong></span> {{$count_links}}</li>
                                        <li class="list-group-item text-right"><span
                                                class="pull-left"><strong>Likes</strong></span> 13
                                        </li>
                                        <li class="list-group-item text-right"><span
                                                class="pull-left"><strong>Posts</strong></span> 37
                                        </li>
                                    </ul>

                                </div><!--/col-3-->
                        </div>
                            <div>
                                <hr>
                            </div>
                                <div class="col-sm-12">
                                    <table class="table table-bordered  table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>link</th>
                                            <th>actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $num = 1
                                        @endphp
                                        @foreach($products as $product)
                                            <tr data-id="{{ $product->id }}">
                                                <td> {{$num++}} </td>
                                                <td> {{$product->link}} </td>
                                                <td>

                                                    <button type="button" class="btn btn-primary btn-scrape" title="pull the latest prices">Scrape
                                                        <i class="glyphicon glyphicon-repeat fast-right-spinner" style="display: none"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
@endsection
 @section('script')
<script>


    $(function () {

        $(".btn-scrape").click(function () {
            let btn = $(this);

            btn.find(".fast-right-spinner").show();

            btn.prop("disabled", true);

            let tRowId = $(this).parents("tr").attr("data-id");

            $.ajaxSetup({
                headers: {
                    'X-XSRF-TOKEN': "{{ csrf_token() }}"
                }
            });

            $.ajax({
                url: "{{ url('scrape') }}",
                data: {link_id: tRowId, _token: "{{ csrf_token() }}"},
                method: "post",
                dataType: "json",
                success: function (response) {

                    if (response.status == 1) {
                        $(".alert").removeClass("alert-danger").addClass("alert-success").text(response.msg).show();
                    } else {
                        $(".alert").removeClass("alert-success").addClass("alert-danger").text(response.msg).show();
                    }

                    btn.find(".fast-right-spinner").hide();
                }
            });
        });
    });
</script>
@endsection
