@extends('admin.app')

@section('title', 'our_services')

@section('content')
@if ($settings->isNotEmpty())
<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">logo</th>
            <th scope="col">keywords</th>
            <th scope="col">site_description</th>
            <th scope="col">phone_number</th>
            <th scope="col">email</th>
            <th scope="col">wp_link</th>
            <th scope="col">insta_link</th>
            <th scope="col">fb_link</th>
            <th scope="col">linkedin_link</th>
            <th scope="col">location</th>
            <th scope="col">controlls</th>
        </tr>
    </thead>
    <tbody>
        @foreach($settings as $setting)
            <td>{{$setting->id}}</td>
            <td>
                <a href="{{asset('assets/front/icons/'.$setting->logo)}}">
                    <img style="width: 100px; height: 50px" src="{{asset('assets/front/icons/'.$setting->logo)}}" alt="">
                </a>
            </td>
            <td>{!!mb_strlen($setting->keywords)> 20 ? mb_substr($setting->keywords, 0, 20).'...':$setting->keywords!!}</td>
            <td>{!!mb_strlen($setting->site_description)> 20 ? mb_substr($setting->site_description, 0, 20).'...':$setting->site_description!!}</td>
            <td>{{$setting->phone_number}}</td>
            <td>{{$setting->email}}</td>
            <td>{{$setting->wp_link	}}</td>
            <td>{{$setting->insta_link}}</td>
            <td>{{$setting->fb_link}}</td>
            <td>{{$setting->linkedin_link}}</td>
            <td>{{$setting->location}}</td>
            <td>
                <a class="btn btn-success" href="{{route('admin.settings.edit', $setting->id)}}">change</a>
            </td>
        @endforeach
    </tbody>
</table>
@else
<div class="alert alert-warning">
    table is empty
</div>
@endif

@endsection
