@extends('admin.app')

@section('title', 'chose us comments')

@section('content')
<a href="{{route('admin.chose_us.create')}}" class="mb-3 btn btn-dark">create</a>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if ($comments->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Commented Person Img</th>
            <th scope="col">Commented Person Name</th>
            <th scope="col">Commented Person Comment</th>
            <th scope="col">Commented Person Position</th>
            <th scope="col">Controlls</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comments as $comment)
        <tr>
            <td>{{$comment->id}}</td>
            <td>
                <a target="_blank" href="{{asset('assets/front/images/'.$comment->chose_us_img)}}"><img style="width: 50px; height: 50px" src="{{asset('assets/front/images/'.$comment->chose_us_img)}}" alt="{{$comment->chose_us_name}}"></a>
            </td>
            <td>{{$comment->chose_us_name}}</td>
            <td>{{$comment->chose_us_comment}}</td>
            <td>{{$comment->chose_us_position}}</td>

            <td>
                <div style="display: flex; column-gap: 10px">
                    <a href="{{route('admin.chose_us.top', $comment->id)}}" class="btn btn-success">↑</a>
                    <a href="{{route('admin.chose_us.bottom', $comment->id)}}" class="btn btn-success">↓</a>
                    <form onclick="return confirm('are you sure?')" method="post" action="{{route('admin.chose_us.destroy', $comment->id)}}">
                        @csrf
                        @method("delete")
                        <input class="btn btn-danger" value="delete" type="submit">

                    </form>

                    <a href="{{route('admin.chose_us.edit', $comment->id)}}" class="btn btn-success">change</a>
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
