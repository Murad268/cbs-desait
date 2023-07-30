@extends('admin.app')

@section('title', 'employer add')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.team.update', $employer->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3 form-group">
        <label class="mb-1">Employer Name</label>
        <input value="{{old('employer_name', $employer->employer_name)}}" name="employer_name" type="text" class="form-control" placeholder="Enter portfolio item title">
        @error('employer_name')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label class="mb-1">Portfolio Item Image</label>
        <input name="employer_avatar" type="file" class="form-control" placeholder="Enter name">
        @error('employer_avatar')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Portfolio Item Category</label>
        <select name="position_id" class="form-select" aria-label="Default select example">
            @foreach($positions as $item)
            <option {{ $item->id == $employer->position_id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->position_name }}</option>
            @endforeach
        </select>

        @error('position_id')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Change</button>
</form>
@endsection
