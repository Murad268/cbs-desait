@extends('admin.app')

@section('title', 'section descriptions')

@section('content')
@if ($descriptions->isNotEmpty())
    <a href="{{route('admin.section__titles.create')}}" class="text-light mb-3 btn btn-warning">create</a>
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
