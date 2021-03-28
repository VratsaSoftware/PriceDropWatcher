@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                    <div class="card-body">
                        <div class="col-md-12">
                            <h2>Add Website</h2>
                            @if(session('error')!='')
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form  action="{{route('websites.store') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                <label for="cron_settings">Choose your cron setting</label>
                                <select name="cron_settings_id" id="cron_settings" class="form-control">
                                    <option>---</option>
                                    @foreach( $cron_settings as $setting )
                                        <option value="{{ $setting->id}}"> {{ $setting->schedule }}</option>
                                    @endforeach
                                </select>
                                </div>
                                <div class="form-group row">
                                    <label for="domain" class="col-sm-3 text-right control-label col-form-label">URL:</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="domain" value="{{old('domain')}}" class="form-control" id="domain" placeholder="URL">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="category_selector" class="col-sm-3 text-right control-label col-form-label">Category Selector</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="category_selector" value="{{old('category_selector')}}" class="form-control" id="category_selector" placeholder="Category Selector">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="title_selector" class="col-sm-3 text-right control-label col-form-label">Title Selector</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="title_selector" value="{{old('title_selector')}}" class="form-control" id="title_selector" placeholder="Title selector">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="image_selector" class="col-sm-3 text-right control-label col-form-label">Image Selector</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="image_selector" value="{{old('image_selector')}}" class="form-control" id="image_selector" placeholder="Image Selector">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="price-bgn-selector" class="col-sm-3 text-right control-label col-form-label">Price BGN Selector</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="price_bgn_selector" value="{{old('price_bgn_selector')}}" class="form-control" id="price-bgn-selector"
                                               placeholder="Price BGN Selector">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="price-pennies-selector"
                                           class="col-sm-3 text-right control-label col-form-label">Price Pennies Selector</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="price_pennies_selector" value="{{old('price_pennies_selector')}}" class="form-control" id="price-pennies-selector" placeholder="Price Pennies Selector">
                                    </div>
                                </div>

                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit"  class="btn btn-success">ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@endsection
