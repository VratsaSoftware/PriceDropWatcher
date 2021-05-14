@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Websites</h2>
            <p><a href="{{ route('websites.create') }}" class="btn btn-success pull-right">Add new</a></p>

            @if(count($websites) > 0)
                <table class="table table-bordered table-dark table-striped">
                    <tr>
                        <td>Url</td>
                        <td>Category selector</td>
                        <td>Title selector</td>
                        <td>Image selector</td>
                        <td>Price BGN selector</td>
                        <td>Price Pennies selector</td>
                        <td>Actions</td>
                    </tr>
                    @foreach($websites as $website)
                        <tr>
                            <td>
                                <a href="{{ $website->domain }}">{{ $website->domain }}</a>
                            </td>
                            <td>{{$website->category_selector}}</td>
                            <td>{{$website->title_selector}}</td>
                            <td>{{$website->image_selector}}</td>
                            <td>{{$website->price_bgn_selector}}</td>
                            <td>{{$website->price_pennies_selector}}</td>


                            <td>
                                <form action="{{ route('websites.destroy',$website->id) }}" method="POST">
                                <a href="{{ route('websites.edit',$website->id) }}" class="btn btn-warning">EDIT</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                @if(count($websites) > 0)
                    <div class="pagination">
                        {{$websites->render()}}
                    </div>
                @endif
            @else
                <i>No websites found</i>
            @endif
        </div>
    </div>
@endsection
