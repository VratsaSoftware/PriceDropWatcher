@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>Websites</h2>
            <a href="{{ route('websites.create') }}" class="btn btn-success pull-right">Add new</a>
            @if(count($websites) > 0)
                <table class="table table-bordered">
                    <tr>
                        <td>Url</td>
                        <td>Actions</td>
                    </tr>
                    @foreach($websites as $website)
                        <tr>
                            <td><a href="{{ $website->domain }}">{{ $website->domain }}</a> </td>
                            <td>
                                <a href="{{ route('websites.edit',$website->id) }}" class="btn btn-warning">EDIT</a>
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
