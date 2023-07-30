@extends('admin.app')

@section('title', 'positions')

@section('content')
<a href="{{route('admin.positions.create')}}" class="mb-3 btn btn-dark">create</a>
@if ($positions->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Position Name</th>
            <th>
                Controlls
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($positions as $position)
        <tr>
            <td>{{$position->id}}</td>
            <td>{{$position->position_name}}</td>
            <td>
                <form onclick="return confirm('are you sure?')" method="post" action="{{route('admin.positions.destroy', $position->id)}}">
                    @csrf
                    @method("delete")
                    <input class="btn btn-danger" value="delete" type="submit">

                </form>
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
