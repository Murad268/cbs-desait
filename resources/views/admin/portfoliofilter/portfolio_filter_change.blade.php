@extends('admin.app')

@section('title', 'header banner add')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.portfolio__filter.store')}}" method="post">
    @csrf

    <div class="mb-3 form-group">
        <label class="mb-1">Filter Title</label>
        <input value="{{old('filter_name', $portfolioFilter->filter_name)}}" name="filter_name" type="text" class="form-control" placeholder="Enter name">
        @error('filter_name')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <button type="submit" class="mt-1 btn btn-primary">Change</button>
</form>
@endsection
