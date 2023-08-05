@extends('admin.app')

@section('title', 'portfolio')

@section('content')
<a href="{{route('admin.portfolio.create')}}" class="mb-3 btn btn-dark">create</a>
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
@if ($portfolio->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Portfolio Item Img</th>
            <th scope="col">Portfolio Banner Img</th>
            <th scope="col">Portfolio Services</th>
            <th scope="col">Portfolio Title</th>
            <th scope="col">Portfolio About</th>
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
            <td>
                <a target="_blank" href="{{asset('assets/front/images/'.$portfolioItem->banner_img)}}"><img style="width: 130px; height: 60px" src="{{asset('assets/front/images/'.$portfolioItem->banner_img)}}" alt="{{$portfolioItem->portfolio_item_title}}"></a>
            </td>
            <td>{{ implode(', ', $portfolioItem->services()->pluck('name')->toArray()) }}</td>


            <td>{{$portfolioItem->portfolio_item_title}}</td>
            <td>{!! mb_strlen($portfolioItem->about_portfolio_item) > 30 ? mb_substr($portfolioItem->about_portfolio_item, 0, 30).'...':$portfolioItem->about_portfolio_item !!}</td>
            <td>
                <div style="display: flex; column-gap: 10px">
                    <a href="{{route('admin.portfolio.top', $portfolioItem->id)}}" class="btn btn-success">↑</a>
                    <a href="{{route('admin.portfolio.bottom', $portfolioItem->id)}}" class="btn btn-success">↓</a>
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
