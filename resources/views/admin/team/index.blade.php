@extends('admin.app')

@section('title', 'header banner')

@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
<a href="{{route('admin.team.create')}}" class="mb-3 btn btn-dark">create</a>
@if ($team->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Employer Image</th>
            <th scope="col">Employer Name</th>
            <th scope="col">Employer Position</th>
            <th scope="col">Controlls</th>
        </tr>
    </thead>
    <tbody>
        @foreach($team as $employer)
        <tr>
            <td>{{$employer->id}}</td>
            <td>
                <a target="_blank" href="{{asset('assets/front/images/'.$employer->employer_avatar)}}"><img style="width: 75px; height: 100px" src="{{asset('assets/front/images/'.$employer->employer_avatar)}}" alt="{{$employer->employer_name}}"></a>
            </td>
            <td>
                {{$employer->employer_name}}
            </td>
            <td>
                {{$employer->position->position_name}}
            </td>
            <td>
              <div style="display: flex; column-gap: 5px">
              <form onclick="return confirm('are you sure?')" method="post" action="{{route('admin.team.destroy', $employer->id)}}">
                    @csrf
                    @method("delete")
                    <input class="btn btn-danger" value="delete" type="submit">
                </form>
                <a href="{{route('admin.team.edit', $employer->id)}}" class="btn btn-success">change</a>
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
