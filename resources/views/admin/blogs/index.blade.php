@extends('admin.app')

@section('title', 'blogs')

@section('content')
<a href="{{route('admin.blogs.create')}}" class="btn btn-dark">create</a>
@if ($blogs->isNotEmpty())

        @foreach($blogs as $blog)
            <div class="mt-3" style="padding:20px; box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
                <div style="display: flex; column-gap: 20px" class="card_img">
                    <span style="width: 100px;">Card image</span>
                    <a target="_blank" href="{{asset($blog->card_img)}}">
                        <img style="width: 100px; height: 100px" src="{{asset($blog->card_img)}}" alt="">
                    </a>
                </div>
                <div style="display: flex; column-gap: 20px" class="mt-3 banner_img">
                    <span style="width: 100px;">Blog Banner</span>
                    <a target="_blank" href="{{asset($blog->card_banner)}}">
                        <img style="width: 300px; height: 80px" src="{{asset($blog->card_banner)}}" alt="">
                    </a>
                </div>
                <div style="display: flex; column-gap: 20px" class="mt-3">
                    <span style="width: 100px;">Blog Title</span>
                    <div>
                        {{$blog->blog_title}}
                    </div>
                </div>
                <div style="display: flex; column-gap: 20px" class="mt-3">
                    <span style="width: 100px;">Blog Category</span>
                    <div>
                        {{$blog->catregory->categoy_name}}
                    </div>
                </div>
                <div style="display: flex; column-gap: 20px" class="mt-3">
                    <span style="width: 100px;">Blog Content</span>
                    <div style="width: 600px; word-wrap: break-word;">
                        {!! $blog->blog_content !!}
                    </div>
                </div>
                <form onclick="return confirm('are you sure?')" method="post" action="{{route('admin.blogs.destroy', $blog->id)}}">
                        @csrf
                        @method("delete")
                        <input class="btn btn-danger" value="delete" type="submit">
                </form>
                <a href="{{route('admin.blogs.edit', $blog->id)}}" class="mt-3 btn btn-primary">change</a>
            </div>
        @endforeach

@else
<div class="mt-2 alert alert-warning">
    table is empty
</div>
@endif

@endsection
