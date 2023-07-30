@extends('admin.app')

@section('title', 'portfolio item add')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.still.update', $still->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3 form-group">
        <label class="mb-1">Still Title</label>
        <input value="{{old('still_title', $still->still_title)}}" name="still_title" type="text" class="form-control" placeholder="Enter title">
        @error('still_title')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Still Subtitle</label>
        <input value="{{old('still_description', $still->still_description)}}" name="still_description" type="text" class="form-control" placeholder="Enter still subtitle">
        @error('still_description')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Change</button>
</form>
@endsection
