@extends('admin.app')

@section('title', 'chose us companies add')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.chose__us__companies.store')}}" method="post">
    @csrf
    <div class="mb-3 form-group">
        <label class="mb-1">Choese Us Company Image</label>
        <input name="company_img" type="file" class="form-control" placeholder="Enter name">
        @error('company_img')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Add</button>
</form>
@endsection
