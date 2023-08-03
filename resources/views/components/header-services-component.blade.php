<div class="header__services">
    @foreach($services as $service)
    <div class="header__service">
        <div class="header__service__top">
            <span><a href="">{{$service->name}}</a></span>
            <span></span>
        </div>
        <ul>
            @foreach($service->services as $subservice)
                <li>{{$subservice->name}}</li>
            @endforeach
        </ul>
    </div>
    @endforeach
</div>
