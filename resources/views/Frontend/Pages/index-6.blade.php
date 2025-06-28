@extends('Frontend.Layouts.app')
@section('page_title', 'Hotel and Resort Laravel 12 Template')
@section('content')
    @include('Frontend.Header.header')

    <!-- banner area -->
     <div class="rts__section banner__area is__home__five banner__height banner__center">
        <div class="banner__content">
            <div class="banner__slider__image">
                <img class="is__clippath" src="{{asset('assets/images/index-5/banner/banner-bg.webp')}}" alt="">
            </div>
            <div class="container">
                <div class="row g-30 align-items-center">
                    <div class="col-lg-7">
                        <div class="banner__slide__content if__not__slider">
                            <h1 class="wow fadeInUp">Discover Luxury in the Heart of the City</h1>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="rts__booking__form">
                            <form action="#" method="post" class="advance__search">
                                <h5>Book Your Stay</h5>
                                <div class="advance__search__wrapper is__home__five">
                                    <!-- single input -->
                                    <div class="query__input wow fadeInUp">
                                        <label for="check__in" class="query__label">Check In</label>
                                        <div class="query__input__position">
                                            <input type="text" id="check__in" name="check__in" placeholder="15 Jun 2024" required>
                                            <div class="query__input__icon">
                                                <i class="flaticon-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single input end -->
                
                                     <!-- single input -->
                                    <div class="query__input wow fadeInUp" data-wow-delay=".3s">
                                        <label for="check__out" class="query__label">Check Out</label>
                                        <div class="query__input__position">
                                            <input type="text" id="check__out" name="check__out" placeholder="15 May 2024" required>
                                            <div class="query__input__icon">
                                                <i class="flaticon-calendar"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single input end -->
                    
                                    <!-- single input -->
                                    <div class="query__input wow fadeInUp" data-wow-delay=".4s">
                                        <label for="adult" class="query__label">Adult</label>
                                        <div class="query__input__position">
                                            <select name="adult" id="adult" class="form-select">
                                                <option value="1">1 Person</option>
                                                <option value="2">2 Person</option>
                                                <option value="3">3 Person</option>
                                                <option value="4">4 Person</option>
                                                <option value="5">5 Person</option>
                                                <option value="6">6 Person</option>
                                                <option value="7">7 Person</option>
                                            </select>
                                            <div class="query__input__icon">
                                                <i class="flaticon-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single input end -->
                    
                                    <!-- single input -->
                                    <div class="query__input wow fadeInUp" data-wow-delay=".5s">
                                        <label for="child" class="query__label">Child</label>
                                        <div class="query__input__position">
                                            <select name="child" id="child" class="form-select">
                                                <option value="1">1 Child</option>
                                                <option value="2">2 Child</option>
                                                <option value="3">3 Child</option>
                                                <option value="4">4 Child</option>
                                                <option value="5">5 Child</option>
                                                <option value="6">6 Child</option>
                                                <option value="7">7 Child</option>
                                            </select>
                                            <div class="query__input__icon">
                                                <i class="flaticon-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single input end -->
                
                                    <!-- submit button -->
                                    <button class="theme-btn btn-style fill no-border search__btn wow fadeInUp" data-wow-delay=".6s">
                                        <span><i class="flaticon-search-1"></i> Search</span>
                                    </button>
                                    <!-- submit button end -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
    <!-- banner area end -->

     <!-- facility -->
    <div class="rts__section section__padding facility is__home__five">
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="facility__content">
                                <div class="row gy-5">
                                    <div class="col-lg-6 col-md-6">
                                        @php
                                            $class = 'no-border is__home__five';
                                            $icon = 'assets/images/icon/bed.svg';
                                            $link = '#';
                                            $title = 'Rooms and Suites';
                                            $desc = 'Varied types of rooms, from standard to luxury suites, equipped with essentials like beds.';
                                        @endphp
                                        @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        @php
                                            $class = 'no-border is__home__five';
                                            $icon = 'assets/images/icon/security.svg';
                                            $link = '#';
                                            $title = '24-Hour Security';
                                            $desc = 'On-site security personnel and best surveillance. from standard to luxury suites,Secure storage for valuables.';
                                        @endphp
                                        @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        @php
                                            $class = 'no-border is__home__five';
                                            $icon = 'assets/images/icon/gym.svg';
                                            $link = '#';
                                            $title = 'Fitness Center';
                                            $desc = 'Equipped with exercise machines and weights.Offering massages, facials, and other treatments.';
                                        @endphp
                                        @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        @php
                                            $class = 'no-border is__home__five';
                                            $icon = 'assets/images/icon/swimming-pool.svg';
                                            $link = '#';
                                            $title = 'Swimming Pool';
                                            $desc = 'Indoor or outdoor pools for leisure or exercise.Offering massages, facials, and other treatments';
                                        @endphp
                                        @include('Frontend.Components.card', compact('class', 'icon', 'link', 'title', 'desc'))
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                        <span class="h6 subtitle__icon__two d-block wow fadeInUp">Facility</span>
                            <h2 class="content__title h2 lh-1 wow fadeInUp">Apartment Facilities</h2>
                            <div class="facility__image mt-50 wow fadeInUp">
                                <img height="325" width="645" class="" src="{{asset('assets/images/index-5/facility.webp')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- facility end -->

    <!-- about us -->
    <div class="rts__section section__padding about is__home__five has__background">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
    
                    @php
                     $top = "About US";
                     $title = "Welcome To Our Moonlit Hotel & Resort";
                    @endphp
                    @include('Frontend.Components.sec-top', compact('top', 'title'))
                    <p class="font-sm d-block mt-30 wow fadeInUp" data-wow-delay="0.4s">Welcome to Bokinn, where luxury meets comfort in the heart of canada. Since 1999, 
                        we have been dedicated to providing an exceptional stay for our guests, blending 
                        modern amenities with timeless elegance.Our beautifully designed rooms and suites 
                        offer stunning views and plush accommodations, ensuring a restful retreat whether 
                        you're here for business or leisure.</p>
                        <img src="{{asset('assets/images/index-5/sign.webp')}}" class="mt-20" width="110" height="75" alt="">
                </div>
            </div>
            <div class="about__positioned__images">
                <div class="image__1 wow fadeInLeft " data-wow-delay=".5s">
                    <img src="{{asset('assets/images/index-5/about/1.webp')}}" height="595" width="825" alt="">
                </div>
                <div class="image__2 wow fadeInUp jarallax" data-wow-delay=".6s" >
                    <img class="jarallax-img" src="{{asset('assets/images/index-5/about/2.webp')}}" width="385" height="530"  alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section__padding mb-100 d-none d-lg-block"></div>
    <div class="pb-100 d-none d-lg-block"></div>
    <!-- about us end -->

    <!-- our rooms -->
    <div class="rts__section room is__home__five section__padding">
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp">
                    <div class="section__content__left">
                    <span class="h6 subtitle__icon__two d-block wow fadeInUp">Room</span>
                        <h2 class="content__title h2 lh-1 mb-0">Our Rooms</h2>
                    </div>
                    <div class="section__content__right">
                        <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest. Each room features plush bedding, high-quality linens, and a selection of pillows to ensure a restful night's sleep.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
        <div class="full__width mt--10">
            <div class="apartment__slider overflow-hidden wow fadeInUp" data-wow-delay=".5s">
                <div class="swiper-wrapper">
                    <!-- single apartment slider -->
                    <div class="swiper-slide">
                        <div class="apartment__slide__box">
                            <div class="apartment__slide__image">
                                <img height="500" width="610" src="{{asset('assets/images/index-3/apartment/1.webp')}}" alt="apartment">
                            </div>
                            <div class="apartment__slide__content">
                                <div class="slider__meta">
                                    <a href="{{route('room-details-1')}}" class="apartment__title">
                                        <h5>Elegant Apartment</h5>
                                    </a>
                                    <div class="apartment__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>5 Person</span>
                                    </div>
                                </div>
                                <span class="price h4">200$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single apartment slider end -->
                    <!-- single apartment slider -->
                    <div class="swiper-slide">
                        <div class="apartment__slide__box">
                            <div class="apartment__slide__image">
                                <img height="500" width="610" src="{{asset('assets/images/index-3/apartment/2.webp')}}" alt="apartment">
                            </div>
                            <div class="apartment__slide__content">
                                <div class="slider__meta">
                                    <a href="{{route('room-details-1')}}" class="apartment__title">
                                        <h5>Elegant Apartment</h5>
                                    </a>
                                    <div class="apartment__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>5 Person</span>
                                    </div>
                                </div>
                                <span class="price h4">200$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single apartment slider end -->
                     
                    <!-- single apartment slider -->
                    <div class="swiper-slide">
                        <div class="apartment__slide__box">
                            <div class="apartment__slide__image">
                                <img height="500" width="610" src="{{asset('assets/images/index-3/apartment/3.webp')}}" alt="apartment">
                            </div>
                            <div class="apartment__slide__content">
                                <div class="slider__meta">
                                    <a href="{{route('room-details-1')}}" class="apartment__title">
                                        <h5>Elegant Apartment</h5>
                                    </a>
                                    <div class="apartment__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>5 Person</span>
                                    </div>
                                </div>
                                <span class="price h4">200$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single apartment slider end -->

                    <!-- single apartment slider -->
                    <div class="swiper-slide">
                        <div class="apartment__slide__box">
                            <div class="apartment__slide__image">
                                <img height="500" width="610" src="{{asset('assets/images/index-3/apartment/4.webp')}}" alt="apartment">
                            </div>
                            <div class="apartment__slide__content">
                                <div class="slider__meta">
                                    <a href="{{route('room-details-1')}}" class="apartment__title">
                                        <h5>Elegant Apartment</h5>
                                    </a>
                                    <div class="apartment__content__meta">
                                        <span><i class="flaticon-construction"></i>35 sqm</span>
                                        <span><i class="flaticon-user"></i>5 Person</span>
                                    </div>
                                </div>
                                <span class="price h4">200$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single apartment slider end -->

                </div>
                <!-- pagination button -->
                <div class="rts__pagination">
                    <div class="rts-pagination"></div>
                </div>
               <!-- pagination button end -->
            </div>
        </div>
    </div>
    <!-- our rooms end -->

    <!-- our services -->
    <div class="rts__section service is__home__five has__background custom__padding">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    @php 
                     $top = "Our Service";
                     $title = "Our Services";
                    @endphp
                    @include('Frontend.Components.sec-top',compact('top','title'))
                </div>
            </div>
            <div class="row overflow-hidden service__slider__five">
                <div class="swiper-wrapper">
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="service__item__slide">
                            <div class="service__thumb">
                                <img height="440" width="385" src="{{asset('assets/images/index-4/service/1.webp')}}" alt="">
                            </div>
                            <div class="service__meta">
                                <h5><a href="{{route('service')}}">Family Fun Package</a></h5>
                                <span class="d-block h4 price">250$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single slide end -->
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="service__item__slide">
                            <div class="service__thumb">
                                <img height="440" width="385" src="{{asset('assets/images/index-4/service/2.webp')}}" alt="">
                            </div>
                            <div class="service__meta">
                                <h5><a href="{{route('service')}}">Spa Retreat</a></h5>
                                <span class="d-block h4 price">120$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single slide end -->
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="service__item__slide">
                            <div class="service__thumb">
                                <img height="440" width="385" src="{{asset('assets/images/index-4/service/3.webp')}}" alt="">
                            </div>
                            <div class="service__meta">
                                <h5><a href="{{route('service')}}">Romantic Getaway</a></h5>
                                <span class="d-block h4 price">100$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single slide end -->
                    <!-- single slide -->
                    <div class="swiper-slide">
                        <div class="service__item__slide">
                            <div class="service__thumb">
                                <img height="440" width="385" src="{{asset('assets/images/index-4/service/4.webp')}}" alt="">
                            </div>
                            <div class="service__meta">
                                <h5><a href="{{route('service')}}">Business Traveler Special</a></h5>
                                <span class="d-block h4 price">450$</span>
                            </div>
                        </div>
                    </div>
                    <!-- single slide end -->
                </div>
            </div>
        </div>
    </div>
    <!-- our services end -->

    <!-- best offer -->
    <div class="rts__section offer is__home__five has__shape section__padding">
        <div class="section__shape">
            <img src="{{asset('assets/images/about/section__shape.svg')}}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp">
                    <div class="section__content__left">
                    <span class="h6 subtitle__icon__two d-block wow fadeInUp">Best Offer</span>
                        <h2 class="content__title h2 lh-1">Best Offers</h2>
                    </div>
                    <div class="section__content__right">
                        <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest. Each room features plush bedding, high-quality linens, and a selection of pillows to ensure a restful night's sleep.</p>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row g-0">
                <!-- single card -->
                <div class="single__offer if__is__big__card">
                    <div class="single__offer__thumb">
                        <a href="{{route('service')}}">
                            <img src="{{asset('assets/images/index-5/offer/mask_group-1.webp')}}" alt="">
                        </a>
                    </div>
                    <div class="single__offer__meta">
                        <h4><a href="{{route('service')}}" title="Room Service Delight">Room Service Delight</a></h4>
                        <p class="font-sm">Indulge in a vibrant and nutritious medley of the season's freshest vegetables. Our Garden Fresh Vegetable Salad features crisp lettuce, juicy cherry tomatoes, crunchy cucumbers.</p>
                        <div class="price__tag">
                            <span class="current__price h4">222$</span>
                            <span class="less__count font-20 h6">32$</span>
                        </div>
                        <a href="{{route('service')}}" class="underline__style">Book Now</a>
                    </div>
                </div>  
                <!-- single card end -->

                <!-- single card -->
                <div class="single__offer if__is__big__card">
                    <div class="single__offer__thumb">
                        <a href="{{route('service')}}">
                            <img src="{{asset('assets/images/index-5/offer/mask_group.webp')}}" alt="">
                        </a>
                    </div>
                    <div class="single__offer__meta">
                        <h4><a href="{{route('service')}}" title="Velvet Red Reserve">Velvet Red Reserve</a></h4>
                        <p class="font-sm">Indulge in a vibrant and nutritious medley of the season's freshest vegetables. Our Garden Fresh Vegetable Salad features crisp lettuce, juicy cherry tomatoes, crunchy cucumbers.</p>
                        <div class="price__tag">
                            <span class="current__price h4">120$</span>
                            <span class="less__count font-20 h6">20$</span>
                        </div>
                        <a href="{{route('service')}}" class="underline__style">Book Now</a>
                    </div>
                </div>  
                <!-- single card end -->
            </div>
        </div>
    </div>
    <!-- best offer end -->

    <!-- client testimonial  -->
    <div class="rts__section testimonial is__home__five pb-120">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    @php 
                        $top = "Testimonial";
                        $title = "What Our Client Say";
                    @endphp
                    @include('Frontend.Components.sec-top',compact('top','title'))
                </div>
            </div>
            <div class="row justify-content-between align-items-center position-relative">
                <div class="col-lg-8">
                    <div class="testimonial__item__content tm__slider__five">
                        <div class="swiper-wrapper">
                            <!-- single slide -->
                            <div class="swiper-slide">
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
                                                <h6 class="mb-0">Al Amin Khan</h6>
                                                <span>COO of Apex Solutions</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single slide end -->
                            <!-- single slide -->
                            <div class="swiper-slide">
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
                                                <span>Fortune It Solutions</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single slide end -->
                        </div>
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
                <div class="col-lg-4 d-none d-lg-flex justify-content-lg-end justify-content-md-start">
                    <div class="testimonial__slider__style__three">
                        <div class="testimonial__author is__thumb overflow-hidden">
                            <div class="swiper-wrapper">
                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial__author__image">
                                        <img width="265" height="285" src="{{asset('assets/images/author/author-2x.webp')}}" alt="">
                                    </div>
                                </div>
                                <!-- single slide end -->

                                <!-- single slide -->
                                <div class="swiper-slide">
                                    <div class="testimonial__author__image">
                                        <img width="265" height="285" src="{{asset('assets/images/author/author-4.webp')}}" alt="">
                                    </div>
                                </div>
                                <!-- single slide end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- client testimonial  end -->

    @include('Frontend.Footer.footer__five')
@endsection 