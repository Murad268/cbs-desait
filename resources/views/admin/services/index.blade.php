@extends('admin.app')

@section('title', 'our_services')

@section('content')
<a href="{{route('admin.services.create')}}" class="mb-3 btn btn-dark">create</a>
@if ($services->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Service Name</th>
            <th scope="col">Service Slug</th>
            <th scope="col">Service Description</th>
            <th scope="col">Controlls</th>
        </tr>
    </thead>
    <tbody>
        @foreach($services as $service)
        <tr style="background-color: #212529;">
            <th class="main__field" scope="row">{{$service->id}}</th>
            <td class="main__field">{{$service->name}}</td>
            <td class="main__field">{{$service->slug}}</td>
            <td class="main__field">{!! mb_strlen($service->about_service) > 150 ? mb_substr($service->about_service, 0, 150):$service->about_service !!}</td>
            <td style="display: flex; column-gap: 10px">
                <div style="display: flex; column-gap: 10px; height:100%">
                    <form onclick="return confirm('are you sure?')" method="post" action="{{route('admin.services.destroy', $service->id)}}">
                        @csrf
                        @method("delete")
                        <input class="btn btn-danger" value="delete" type="submit">

                    </form>
                    <a href="{{route('admin.services.edit', $service->id)}}" class="btn btn-success">change</a>
                </div>
            </td>
        </tr>

        @foreach($service->services as $subservices)
        <tr style="background-color: #212529;">
            <th scope="row">{{$subservices->id}}</th>
            <td>{{$subservices->name}}</td>
            <td>{{$subservices->slug}}</td>
            <td class="main__field">{!! mb_strlen($subservices->about_service) > 150 ? mb_substr($subservices->about_service, 0, 150).'...' : $subservices->about_service !!}</td>
            <td style="display: flex; column-gap: 10px">
                <div style="display: flex; column-gap: 10px; height:100%">
                    <form onclick="return confirm('are you sure?')" method="post" action="{{route('admin.services.destroy', $subservices->id)}}">
                        @csrf
                        @method("delete")
                        <input class="btn btn-danger" value="delete" type="submit">

                    </form>

                    <a href="{{route('admin.services.edit', $subservices->id)}}" class="btn btn-success">change</a>
                </div>
            </td>
        </tr>
        @endforeach
        @endforeach


    </tbody>
</table>
@else
<div class="alert alert-warning">
    table is empty
</div>
@endif

@endsection
