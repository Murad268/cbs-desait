@extends('admin.app')

@section('title', 'add service')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.services.store')}}" method="post">
    @csrf
    <div class="mb-3 form-group">
        <label class="mb-1">Services Icon</label>
        <input name="services_item_icons" type="file" class="form-control">
        @error('services_item_icons')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Work Banner Image</label>
        <input name="banner_image" type="file" class="form-control banner_image" >
        @error('banner_image')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Service Name</label>
        <input name="name" value="{{old('name')}}" type="text" class="form-control" placeholder="Enter service name">
        @error('name')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Service Sup Service</label>
        <select name="service_id" class="form-select" aria-label="Default select example">
            <option value="0" selected>Main Service</option>
            @foreach($services as $service)
            <option {{ old('service_id') == $service->id ? 'selected' : '' }} value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>

        @error('service_id')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Service Decription</label>
        <button class="add_photo btn btn-success mb-1">add photo</button>
        <textarea class="about_service" placeholder="Enter service description" id="editor" class="mt-3 mb-3" name="about_service">{{old('about_service')}}</textarea>
        @error('about_service')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>

@endsection
