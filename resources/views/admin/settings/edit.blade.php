@extends('admin.app')

@section('title', 'change setting')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.settings.update', $setting->id)}}" method="post" >
    @csrf
    @method('PUT')

    <div class="mb-3 form-group">
        <label class="mb-1">Site Logo</label>
        <input name="logo" type="file" class="form-control" placeholder="Enter name">
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Site Keywords</label>
        <textarea placeholder="Enter site keywords" id="editor" name="keywords" class="mt-3 mb-3" name="content">{{old('keywords', $setting->keywords)}}</textarea>
        @error('keywords')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Site Description</label>
        <textarea placeholder="Enter site description" id="editor" name="site_description" class="mt-3 mb-3" name="content">{{old('site_description', $setting->site_description)}}</textarea>
        @error('site_description')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label class="mb-1">Phone Number</label>
        <input name="phone_number" value="{{old('phone_number', $setting->phone_number)}}" type="text" class="form-control" placeholder="Enter phone number">
        @error('phone_number')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>



    <div class="mb-3 form-group">
        <label class="mb-1">Email</label>
        <input name="email" value="{{old('email', $setting->email)}}" type="text" class="form-control" placeholder="Enter email">
        @error('email')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>


    <div class="mb-3 form-group">
        <label class="mb-1">Whatshapp Link</label>
        <input name="wp_link" value="{{old('wp_link', $setting->wp_link)}}" type="text" class="form-control" placeholder="Enter whatshapp number link">
        @error('wp_link')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>


    <div class="mb-3 form-group">
        <label class="mb-1">Instagram Link</label>
        <input name="insta_link" value="{{old('insta_link', $setting->insta_link)}}" type="text" class="form-control" placeholder="Enter instagram link">
        @error('insta_link')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>


    <div class="mb-3 form-group">
        <label class="mb-1">Facebook Link</label>
        <input name="fb_link" value="{{old('fb_link', $setting->fb_link)}}" type="text" class="form-control" placeholder="Enter facebook link">
        @error('fb_link')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label class="mb-1">Linkedin Link</label>
        <input name="linkedin_link" value="{{old('linkedin_link', $setting->linkedin_link)}}" type="text" class="form-control" placeholder="Enter linkedin link">
        @error('linkedin_link')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>


    <div class="mb-3 form-group">
        <label class="mb-1">Location</label>
        <input name="location" value="{{old('location', $setting->location)}}" type="text" class="form-control" placeholder="Enter location">
        @error('location')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
  <button type="submit" class="btn btn-primary">Change</button>
</form>
@endsection
