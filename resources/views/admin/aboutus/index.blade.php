@extends('admin.app')

@section('title', 'about us')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if ($about->isNotEmpty())
@foreach($about as $item)
<div style="width: 100%;">
    <div class="mb-3" style="display: flex;">
        <div style="width:150px">About Image</div>
        <div style="width:600px">
            <a  target="_blank" href="{{asset('assets/front/images/'.$item->about_img)}}">
                <img style="width: 250px; height: 300px;" src="{{asset('assets/front/images/'.$item->about_img)}}" alt="">
            </a>
        </div>
    </div>
    <div class="mb-3" style="display: flex;">
        <div style="width:150px">About Top Text</div>
        <div style="width:600px">{{$item->about_top}}</div>
    </div>
    <div class="mb-3" style="display: flex; ">
        <div style="width:150px">About Title</div>
        <div style="width:600px">{{$item->about_title}}</div>
    </div>
    <div style="display: flex;">
        <div style="width:150px">About Text</div>
        <div style="width:600px">{{$item->about_text}}</div>
    </div>
    <a href="{{route('admin.about__us.edit', $item->id)}}" class="mt-3 btn btn-primary">Change</a>
</div>
@endforeach
</tbody>
@else
<div class="alert alert-warning">
    table is empty
</div>
@endif

@endsection
