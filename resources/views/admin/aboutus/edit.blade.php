@extends('admin.app')

@section('title', 'about us text change')
@section('content')
<form enctype="multipart/form-data" action="{{route('admin.about__us.update', $us->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3 form-group">
        <label class="mb-1">About Image</label>
        <input name="about_img" type="file" class="form-control" >
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">About Top Text</label>
        <input value="{{old('about_top', $us->about_top)}}" name="about_top" type="text" class="form-control" placeholder="Enter top text">
        @error('about_top')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">About Title</label>
        <input value="{{old('about_title', $us->about_title)}}" name="about_title" type="text" class="form-control" placeholder="Enter about title">
        @error('about_title')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">About Description</label>
        <textarea placeholder="Enter about description" id="editor"  name="about_text"class="mt-3 mb-3" name="content">{{old('about_text', $us->about_text  )}}</textarea>
        @error('about_text')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Change</button>
</form>


@endsection
