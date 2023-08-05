@extends('admin.app')

@section('title', 'header banner')

@section('content')
<a href="{{route('admin.header__banner.create')}}" class="mb-3 btn btn-dark">create</a>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if ($headerBannerItems->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Banner Img</th>
            <th scope="col">Banner Title</th>
            <th scope="col">Banner Subtitle</th>
            <th scope="col">Controlls</th>
        </tr>
    </thead>
    <tbody>
        @foreach($headerBannerItems as $headerBannerItem)
        <tr>
            <td>{{$headerBannerItem->id}}</td>
            <td>
                <a target="_blank" href="{{asset('assets/front/images/'.$headerBannerItem->banner_img)}}"><img style="width: 150px; height: 50px" src="{{asset('assets/front/images/'.$headerBannerItem->banner_img)}}" alt="{{$headerBannerItem->banner__title}}"></a>
            </td>
            <td>{{$headerBannerItem->banner__title}}</td>
            <td>{{$headerBannerItem->banner_subtitle}}</td>
            <td>
                <div style="display: flex; column-gap: 10px">
                    <a href="{{route('admin.header__banner.top', $headerBannerItem->id)}}" class="btn btn-success">↑</a>
                    <a href="{{route('admin.header__banner.bottom', $headerBannerItem->id)}}" class="btn btn-success">↓</a>
                    <form onclick="return confirm('are you sure?')" method="post" action="{{route('admin.header__banner.destroy', $headerBannerItem->id)}}">
                        @csrf
                        @method("delete")
                        <input class="btn btn-danger" value="delete" type="submit">
                    </form>
                    <a href="{{route('admin.header__banner.edit', $headerBannerItem->id)}}" class="btn btn-success">change</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<div class="alert alert-warning">
    table is empty
</div>
@endif

@endsection
