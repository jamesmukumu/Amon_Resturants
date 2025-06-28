<div class="room__card is__style__three">
    <div class="room__card__top">
        <div class="room__card__image">
            <a href="{{route('room-details-1')}}">
                <img src="{{asset('assets/images/pages/room/' . ($thumb ?? ''))}}" width="645" height="415" alt="room card">
            </a>
        </div>
        <div class="room__price__tag">
            <span class="h6 d-block">{{$price ?? ''}}</span>
        </div>
    </div>
    <div class="room__card__meta">
        <a href="{{route('room-details-1')}}" class="room__card__title h4">{{$title ?? ''}}</a>
        <div class="room__card__meta__info">
            <span><i class="flaticon-construction"></i>35 sqm</span>
            <span><i class="flaticon-user"></i>5 Person</span>
        </div>
        <p class="font-sm">{{$desc ?? ''}}</p>
        <a href="{{route('room-details-1')}}" class="room__card__link">Discover More</a>

    </div>
</div>