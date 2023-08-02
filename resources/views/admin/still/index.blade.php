@extends('admin.app')

@section('title', 'portfolio')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if ($still->isNotEmpty())
        @foreach($still as $item)
        <div style="width: 100%;">
            <div class="mb-3" style="display: flex;">
                <div style="width:150px">Still Title</div>
                <div style="width:600px">{{$item->still_title}}</div>
            </div>
            <div style="display: flex; ">
                <div style="width:150px">Still Description</div>
                <div style="width:600px">{{$item->still_description}}</div>
            </div>
            <a href="{{route('admin.still.edit', $item->id)}}" class="mt-3 btn btn-primary">Change</a>
        </div>
        @endforeach
    </tbody>

@else
<div class="alert alert-warning">
    table is empty
</div>
@endif

@endsection
