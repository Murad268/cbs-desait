@extends('admin.app')

@section('title', 'add section description')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.section__titles.store')}}" method="post">
    @csrf
    <div class="mb-3 form-group">
        <label class="mb-1">Section Description</label>
        <input value="{{old('section__desc')}}" name="section__desc" type="text" class="form-control" placeholder="Enter description">
        @error('section__desc')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <button type="submit" class="mt-1 btn btn-primary">Add</button>
</form>
@endsection
