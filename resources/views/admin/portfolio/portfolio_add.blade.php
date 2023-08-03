@extends('admin.app')

@section('title', 'portfolio item add')


@section('content')
<form enctype="multipart/form-data" action="{{route('admin.portfolio.store')}}" method="post">
    @csrf

    <div class="mb-3 form-group">
        <label class="mb-1">Portfolio Item Title</label>
        <input value="{{old('portfolio_item_title')}}" name="portfolio_item_title" type="text" class="form-control" placeholder="Enter portfolio item title">
        @error('portfolio_item_title')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label class="mb-1">Portfolio Item Image</label>
        <input name="portfolio_item_img" type="file" class="form-control" >
        @error('portfolio_item_img')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>
    <div class="mb-3 form-group">
        <label class="mb-1">Used Services</label>
        <br>
        <select id="portfolio__item__category_id" name="portfolio__item__category_id[]" class="form-control" multiple>
            @foreach($services as $service)
            <option {{ in_array($service->id, old('portfolio__item__category_id') ?? []) ? 'selected' : '' }} value="{{ $service->id }}">{{ $service->name }}</option>
            @endforeach
        </select>


        @error('portfolio__item__category_id')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>


    <div class="mb-3 form-group">
        <label class="mb-1">Portfolio Category</label>
        <select name="filter_id" class="form-select" aria-label="Default select example">
            @foreach($filter as $item)
            <option {{ old('filter_id') == $item->id ? 'selected' : '' }} value="{{ $item->id }}">{{ $item->filter_name }}</option>
            @endforeach
        </select>
        @error('filter_id')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <div class="mb-3 form-group">
        <label class="mb-1">Portfolio Item Decription</label>
        <textarea placeholder="Enter portfolio item description" id="editor" name="about_portfolio_item" class="mt-3 mb-3" name="content">{{old('about_portfolio_item')}}</textarea>
        @error('about_portfolio_item')
        <div class="alert alert-danger mt-2" role="alert">
            {{$message}}
        </div>
        @enderror
    </div>

    <button type="submit" class="mt-3 btn btn-primary">Add</button>
</form>
@endsection
