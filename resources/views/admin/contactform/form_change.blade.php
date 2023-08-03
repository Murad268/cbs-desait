@extends('admin.app')

@section('title', 'form text change')
@section('content')
<form enctype="multipart/form-data" action="{{route('admin.contact__form.update', $form->id)}}" method="post">
    @csrf
    @method('put')
    <div class="mb-3 form-group">
        <label class="mb-1">Form Title</label>
        <input value="{{old('form_title', $form->form_title)}}" name="form_title" type="text" class="form-control" placeholder="Enter form title">
        @error('form_title')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Form Description</label>
        <textarea placeholder="Enter form description" id="editor"  name="form_subtitle"class="mt-3 mb-3" name="content">{{old('form_subtitle', $form->form_subtitle  )}}</textarea>
        @error('form_subtitle')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <button type="submit" class="mt-3 btn btn-primary">Change</button>
</form>


@endsection
