@extends('admin.app')

@section('title', 'chose us companies')

@section('content')
<a href="{{route('admin.chose__us__companies.create')}}" class="mb-3 btn btn-dark">create</a>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if ($companies->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Company Img</th>
            <th scope="col">Controllers</th>
        </tr>
    </thead>
    <tbody>
        @foreach($companies as $company)
        <tr>
            <td>
                {{$company->id}}
            </td>
            <td>
                <a target="_blank" href="{{asset('assets/front/icons/'.$company->company_img)}}"><img style="width: 120px; height: 50px" src="{{asset('assets/front/icons/'.$company->company_img)}}" alt="{{$company->company_img}}"></a>
            </td>
            <td>
                <a href="{{route('admin.chose__us__companies.top', $company->id)}}" class="btn btn-success">↑</a>
                <a href="{{route('admin.chose__us__companies.bottom', $company->id)}}" class="btn btn-success">↓</a>
                <form class="mt-2" onsubmit="return deleteConfirmation(event)" method="post" action="{{route('admin.chose__us__companies.destroy', $company->id)}}">
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
