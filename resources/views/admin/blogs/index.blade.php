@extends('admin.app')

@section('title', 'blog category add')

@section('content')
<a href="{{route('admin.chose__us__companies.create')}}" class="mb-3 btn btn-dark">create</a>
@if ($categories->isNotEmpty())

        @foreach($categories as $category)
            <div>
                <div style="display: flex; column-gap: 20px" class="card_img">
                    <span>card image</span>
                    <a href="">
                        <img style="width: q00px; height: 100px" src="https://staticg.sportskeeda.com/editor/2021/07/baf3f-16257104947057-800.jpg?w=840" alt="">
                    </a>
                </div>
                <div style="display: flex; column-gap: 20px" class="banner_img">
                    <a href="">
                        <img style="width: 300px; height: 60px" src="https://www.insidesport.in/wp-content/uploads/2023/04/526ab8efaf60be59ccf03e314e019a3a-3.jpg?w=690" alt="">
                    </a>
                </div>
                <div style="display: flex; column-gap: 20px" class="">

                </div>
            </div>
        @endforeach

@else
<div class="alert alert-warning">
    table is empty
</div>
@endif

@endsection
