@extends('Frontend.Layouts.app')
@section('page_title', 'Room Style One Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "Deluxe Room";
        $desc = "A step up from the standard room, often with better views, more space, and additional amenities.";
    @endphp
    @include('Frontend.Components.page-hero',compact('title','desc'))

    <!-- advance search -->
    @php 
        $class = "is__page has__border pt-120 pb-60";
        $attr = "";
    @endphp
    @include('Frontend.Partials.advance__search',compact('class','attr'))
    <!-- advance search end -->

    <!-- single rooms -->
    <div class="rts__section pb-120">
        <div class="container">
            <div class="row g-30">
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "1.webp";
                        $price = "120$";
                        $title = "Deluxe Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "1.webp";
                        $price = "140$";
                        $title = "Single Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "3.webp";
                        $price = "150$";
                        $title = "Double Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "4.webp";
                        $price = "120$";
                        $title = "Tirple Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "5.webp";
                        $price = "140$";
                        $title = "Connecting Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
                <!-- single room -->
                <div class="col-xl-4 col-lg-6 col-md-6">
                    @php 
                        $thumb = "6.webp";
                        $price = "140$";
                        $title = "Accessible Room";
                        $desc = "Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest.";
                    @endphp
                    @include('Frontend.Components.room-card',compact('thumb','price','title', 'desc'))
                </div>
                <!-- single room end -->
            </div>
            <!-- row end -->
             <div class="load__more__link">
                <a href="#">Load More</a>
             </div>
        </div>
    </div>
    <!-- single rooms end -->

    <!-- client testimonial  -->
    <div class="rts__section pb-120">
        <div class="container">
            <div class="row mb-40">
                <div class="d-flex align-items-center justify-content-between position-relative">
                    @php 
                        $title = "Testimonial";
                        $bigTitle = "What Our Client Say";
                    @endphp
                    @include('Frontend.Components.sec-top-3',compact('title','bigTitle'))
                    <div class="slider__navigation">
                        <div class="nav__btn button-next">
                            <img src="{{asset('assets/images/icon/arrow-left-short.svg')}}" alt="">
                        </div>
                        <div class="nav__btn button-prev">
                            <img src="{{asset('assets/images/icon/arrow-right-short.svg')}}" alt="">
                        </div>
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <div class="testimonial__slider overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial__item__content">
                                    <div class="author__icon">
                                        <img src="{{asset('assets/images/author/author-2x.webp')}}" alt="">
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="single__slider__item ">
                                            <div class="slider__rating mb-20">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star-sharp-half-stroke"></i>
                                            </div>
                                            <span class="slider__text d-block">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner, always ready to tackle new challenges with and expertise.Their commitment to and delivering tailored.</span>
                                            <div class="slider__author__info">
                                                <div class="slider__author__info__content">
                                                    <h6 class="mb-0">Sarah Martinez</h6>
                                                    <span>COO of Apex Solutions</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial__item__content">
                                    <div class="author__icon">
                                        <img src="{{asset('assets/images/author/author-5.webp')}}" alt="">
                                    </div>
                                    <div class="testimonial__content">
                                        <div class="single__slider__item ">
                                            <div class="slider__rating mb-20">
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star"></i>
                                                <i class="flaticon-star-sharp-half-stroke"></i>
                                            </div>
                                            <span class="slider__text d-block">Choosing Bokinn was one of the best decisions we've ever made. They have proven to be a reliable and innovative partner, always ready to tackle new challenges with and expertise.Their commitment to and delivering tailored.</span>
                                            <div class="slider__author__info">
                                                <div class="slider__author__info__content">
                                                    <h6 class="mb-0">Sarah Martinez</h6>
                                                    <span>COO of Apex Solutions</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client testimonial  end -->
    @include('Frontend.Footer.footer__common')
@endsection
