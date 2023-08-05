@extends('admin.app')

@section('title', 'change service')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.services.update', $service->id)}}" method="post" >
    @csrf
    @method('PUT')
    <div class="mb-3 form-group">
        <label class="mb-1">Services Icon</label>
        <input name="services_item_icons" type="file" class="form-control" >
        @error('services_item_icons')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Work Banner Image</label>
        <input name="banner_image" type="file" class="form-control" >
        @error('banner_image')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
  <div class="mb-3 form-group">
    <label class="mb-1">Service Name</label>
    <input name="name" value="{{old('name', $service->name)}}" type="text" class="form-control" placeholder="Enter service name">
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
        @if($service->service_id != 0)
            @foreach($services as $servicer)
                <option {{ $service->service_id == $servicer->id ? 'selected' : '' }} value="{{ $servicer->id }}">{{ $servicer->name }}</option>
            @endforeach
        @endif
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
        <textarea class="about_service" placeholder="Enter service description" id="editor" class="mt-3 mb-3" name="about_service">{{old('about_portfolio_item', $service->about_service)}}</textarea>
        @error('about_service')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
  <button type="submit" class="btn btn-primary">Change</button>
</form>
@endsection
