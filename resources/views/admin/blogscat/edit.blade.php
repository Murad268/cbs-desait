@extends('admin.app')

@section('title', 'header banner add')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.blogs__categories.update', $category->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3 form-group">
        <label class="mb-1">Filter Title</label>
        <input value="{{old('category', $category->categoy_name)}}" name="categoy_name" type="text" class="form-control" placeholder="Enter name">
        @error('categoy_name')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <button type="submit" class="mt-1 btn btn-primary">Change</button>
</form>
@endsection
