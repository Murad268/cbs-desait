@extends('admin.app')

@section('title', 'blog add')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.blogs.update', $blog->id)}}" method="post">
    @csrf
    @method('put')

    <div class="mb-3 form-group">
        <label class="mb-1">Card Image</label>
        <input name="card_img" type="file" class="form-control" >
        @error('card_img')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label class="mb-1">Banner Image</label>
        <input name="card_banner" type="file" class="form-control" >
        @error('card_banner')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label class="mb-1">Blog Category</label>
        <select name="category_id" class="form-select" aria-label="Default select example">
            @foreach($categories as $item)
            <option {{ $blog->category_id == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->categoy_name }}</option>
            @endforeach
        </select>
        @error('category_id')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label class="mb-1">Blog Title</label>
        <input value="{{old('blog_title', $blog->blog_title)}}" name="blog_title" type="text" class="form-control" placeholder="Enter name">
        @error('blog_title')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label class="mb-1">Blog Decription</label>
        <textarea placeholder="Enter blog description" id="editor"  name="blog_content"class="mt-3 mb-3" name="content">{{old('blog_content', $blog->blog_content)}}</textarea>
        @error('blog_content')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>


    <button type="submit" class="mt-3 btn btn-primary">Add</button>
</form>
@endsection
