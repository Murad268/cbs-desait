@extends('admin.app')

@section('title', 'work proccess')

@section('content')
<a href="{{route('admin.work__proccess.create')}}" class="mb-3 btn btn-dark">create</a>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if ($proccessess->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Proccess Icon</th>
            <th scope="col">Proccess Title</th>
            <th scope="col">Proccess Desc</th>
            <th>
                Controlls
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($proccessess as $proccess)
        <tr>
            <td>
                {{$proccess->id}}
            </td>
            <td>
                <a target="_blank" href="{{asset('assets/front/icons/'.$proccess->proccess_icon)}}"><img style="width: 30px; height: 30px" src="{{asset('assets/front/icons/'.$proccess->proccess_icon)}}" alt="{{$proccess->proccess_title}}"></a>
            </td>
            <td>
                {{$proccess->proccess_title}}

            </td>
            <td>
                {{$proccess->proccess_desc}}
            </td>
            <td >
                <a href="{{route('admin.work__proccess.top', $proccess->id)}}" class="btn btn-success">↑</a>
                <a href="{{route('admin.work__proccess.bottom', $proccess->id)}}" class="btn btn-success">↓</a>
                <div style="display: flex; column-gap: 10px">
                <form class="mt-2" onsubmit="return deleteConfirmation(event)" method="post" action="{{route('admin.work__proccess.destroy', $proccess->id)}}">
                    @csrf
                    @method("delete")
                    <input class="btn btn-danger" value="delete" type="submit">

                </form>
                <a href="{{route('admin.work__proccess.edit', $proccess->id)}}" class="btn btn-success">change</a>
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
