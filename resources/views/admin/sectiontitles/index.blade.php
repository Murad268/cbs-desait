@extends('admin.app')

@section('title', 'section descriptions')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if ($descriptions->isNotEmpty())
    @foreach($descriptions as $description)
        <div style="display: flex; align-items: center; justify-content: space-between" class="alert alert-success">
            <div style="width: 500px;">{{$description->section__desc}}</div>
            <div>
                <a class="btn btn-primary" href="{{route('admin.section__titles.edit', $description->id)}}">change</a>
            </div>
        </div>
    @endforeach
@else
<div class="alert alert-warning">
    table is empty
</div>
@endif

@endsection
