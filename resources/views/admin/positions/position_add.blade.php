@extends('admin.app')

@section('title', 'position add')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.positions.store')}}" method="post">
    @csrf

    <div class="mb-3 form-group">
        <label class="mb-1">Position Name</label>
        <input value="{{old('position_name')}}" name="position_name" type="text" class="form-control" placeholder="Position position name">
        @error('position_name')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <button type="submit" class="mt-1 btn btn-primary">Add</button>
</form>
@endsection
