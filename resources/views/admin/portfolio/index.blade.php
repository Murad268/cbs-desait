@extends('admin.app')

@section('title', 'portfolio')

@section('content')
<a href="{{route('admin.portfolio.create')}}" class="mb-3 btn btn-dark">create</a>
@if ($portfolio->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Banner Img</th>
            <th scope="col">Banner Category</th>
            <th scope="col">Banner Title</th>
            <th scope="col">Controlls</th>
        </tr>
    </thead>
    <tbody>
        @foreach($portfolio as $portfolioItem)
        <tr>
            <td>{{$portfolioItem->id}}</td>
            <td>
                <a target="_blank" href="{{asset('assets/front/images/'.$portfolioItem->portfolio_item_img)}}"><img style="width: 50px; height: 50px" src="{{asset('assets/front/images/'.$portfolioItem->portfolio_item_img)}}" alt="{{$portfolioItem->portfolio_item_title}}"></a>
            </td>
            <td>{{$portfolioItem->filter->filter_name}}</td>
            <td>{{$portfolioItem->portfolio_item_title}}</td>
            <td>
                <div style="display: flex; column-gap: 10px">
                    <form onclick="return confirm('are you sure?')" method="post" action="{{route('admin.portfolio.destroy', $portfolioItem->id)}}">
                        @csrf
                        @method("delete")
                        <input class="btn btn-danger" value="delete" type="submit">

                    </form>

                    <a href="{{route('admin.portfolio.edit', $portfolioItem->id)}}" class="btn btn-success">change</a>
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
