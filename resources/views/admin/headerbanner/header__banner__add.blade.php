@extends('admin.app')

@section('title', 'header banner add')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.header__banner.store')}}" method="post">
    @csrf

    <div class="mb-3 form-group">
        <label class="mb-1">Banner Title</label>
        <input value="{{old('banner__title')}}" name="banner__title" type="text" class="form-control" placeholder="Enter banner title">
        @error('banner__title')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Banner Subtitle</label>
        <input value="{{old('banner_subtitle')}}" name="banner_subtitle" type="text" class="form-control" placeholder="Enter banner subtitle">
        @error('banner_subtitle')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Banner Image</label>
        <input name="banner_img" type="file" class="form-control">
        @error('banner_img')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Add</button>
</form>
@endsection
