@extends('admin.app')

@section('title', 'add service')


@section('content')
<form action="{{route('admin.services.store')}}" method="post">
    @csrf
    <div class="mb-3 form-group">
        <label class="mb-1">Service Icon</label>
        <input name="services_item_icons" value="{{old('services_item_icons')}}" type="text" class="form-control" placeholder="Enter icon class">
        @error('services_item_icons')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Service Name</label>
        <input name="name" value="{{old('name')}}" type="text" class="form-control" placeholder="Enter name">
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

    <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection
