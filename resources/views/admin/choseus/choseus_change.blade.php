@extends('admin.app')

@section('title', 'add comment')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.chose_us.update', $comment->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3 form-group">
        <label class="mb-1">Chose Us Image</label>
        <input name="chose_us_img" type="file" class="form-control">
        @error('chose_us_img')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Chose Us Comment</label>
        <input value="{{old('chose_us_comment', $comment->chose_us_comment)}}" name="chose_us_comment" type="text" class="form-control" placeholder="Enter chose us comment">
        @error('chose_us_comment')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Chose Us Name</label>
        <input value="{{old('chose_us_name', $comment->chose_us_name)}}" name="chose_us_name" type="text" class="form-control" placeholder="Enter chose us name">
        @error('chose_us_name')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Chose Us Position</label>
        <input value="{{old('chose_us_position', $comment->chose_us_position)}}" name="chose_us_position" type="text" class="form-control" placeholder="Enter chose us position">
        @error('chose_us_position')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Change</button>
</form>
@endsection
