@extends('admin.app')

@section('title', 'blogs filter add')

@section('content')
<a href="{{route('admin.blogs__categories.create')}}" class="mb-3 btn btn-dark">create</a>
@if ($categories->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Filter Name</th>
            <th scope="col">Controllers</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>

            <td>{{$category->categoy_name}}</td>
            <td>
                <div style="display: flex; column-gap: 10px">
                    <form onclick="return confirm('are you sure?')" method="post" action="{{route('admin.blogs__categories.destroy', $category->id)}}">
                        @csrf
                        @method("delete")
                        <input class="btn btn-danger" value="delete" type="submit">
                    </form>
                    <a href="{{route('admin.blogs__categories.edit', $category->id)}}" class="btn btn-success">change</a>
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
