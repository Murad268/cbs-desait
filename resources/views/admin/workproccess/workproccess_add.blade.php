@extends('admin.app')

@section('title', 'add workpress')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.work__proccess.store')}}" method="post">
    @csrf
    <div class="mb-3 form-group">
        <label class="mb-1">Work Proccess Icon</label>
        <input name="proccess_icon" type="file" class="form-control" placeholder="Enter name">
        @error('proccess_icon')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Work Proccess Title</label>
        <input value="{{old('proccess_title')}}" name="proccess_title" type="text" class="form-control" placeholder="Enter name">
        @error('proccess_title')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Work Proccess Description</label>
        <input value="{{old('proccess_desc')}}" name="proccess_desc" type="text" class="form-control" placeholder="Enter name">
        @error('proccess_desc')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <button type="submit" class="mt-3 btn btn-primary">Add</button>
</form>
@endsection
