@extends('admin.app')

@section('title', 'header banner add')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.blogs__categories.store')}}" method="post">
    @csrf

    <div class="mb-3 form-group">
        <label class="mb-1">Filter Name</label>
        <input value="{{old('categoy_name')}}" name="categoy_name" type="text" class="form-control" placeholder="Enter filter name">
        @error('categoy_name')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <button type="submit" class="mt-1 btn btn-primary">Add</button>
</form>
@endsection
