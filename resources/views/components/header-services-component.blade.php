<div class="header__services">
    @foreach($services as $service)
    <div class="header__service">
        <div class="header__service__top">
            <span><a href="{{route('front.service', $service->slug)}}">{{$service->name}}</a></span>
        </div>
        <ul>
            @foreach($service->services as $subservice)
                <li>{{$subservice->name}}</li>
            @endforeach
        </ul>
    </div>
    @endforeach
</div>
