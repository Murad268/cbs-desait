@extends('admin.app')

@section('title', 'portfolio filter banner')

@section('content')
<a href="{{route('admin.portfolio__filter.create')}}" class="mb-3 btn btn-dark">create</a>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if ($portfolioFilter->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Filter Name</th>
            <th scope="col">Controllers</th>
        </tr>
    </thead>
    <tbody>
        @foreach($portfolioFilter as $filter)
        <tr>
            <td>{{$filter->id}}</td>

            <td>{{$filter->filter_name}}</td>
            <td>
                <div style="display: flex; column-gap: 10px">
                    <a href="{{route('admin.portfolio__filter.top', $filter->id)}}" class="btn btn-success">↑</a>
                    <a href="{{route('admin.portfolio__filter.bottom', $filter->id)}}" class="btn btn-success">↓</a>
                    <form onsubmit="return deleteConfirmation(event, 'are you sure? When a filter item is deleted, all portfolio items linked to that filter will also be deleted')" method="post" action="{{route('admin.portfolio__filter.destroy', $filter->id)}}">
                        @csrf
                        @method("delete")
                        <input class="btn btn-danger" value="delete" type="submit">

                    </form>

                    <a href="{{route('admin.portfolio__filter.edit', $filter->id)}}" class="btn btn-success">change</a>
                </div>
            </td>
        </tr>
        @endforeach


    </tbody>
</table>
@else
<div class="alert alert-warning">
    table is empty
</div>
@endif

@endsection
