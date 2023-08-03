@extends('admin.app')

@section('title', 'change banner')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.header__banner.update', $headerBanner->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3 form-group">
        <label class="mb-1">Banner Title</label>
        <input  value="{{old('banner__title', $headerBanner->banner__title)}}"    name="banner__title" type="text" class="form-control" placeholder="Enter banner title">
        @error('banner__title')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Banner Subtitle</label>
        <input value="{{old('banner_subtitle', $headerBanner->banner_subtitle)}}"  name="banner_subtitle" type="text" class="form-control" placeholder="Enter banner subtitle">
        @error('banner_subtitle')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Banner Image</label>
        <input name="banner_img" type="file" class="form-control" >
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Change</button>
</form>
@endsection
