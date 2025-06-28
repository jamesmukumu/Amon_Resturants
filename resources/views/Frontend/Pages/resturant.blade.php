@extends('Frontend.Layouts.app')
@section('page_title', 'Resturant Page Template')

@section('content')
    @include('Frontend.Header.header')
    
    @php 
        $title = "The Resturant";
        $desc = "Whether you are in the mood for a leisurely breakfast, a business lunch, or a romantic dinner.";
    @endphp
    @include('Frontend.Components.page-hero',compact('title','desc'))
    
    <!-- about us -->
    <div class="rts__section about is__resturant section__padding">
        <div class="container">
            <div class="row g-4 align-items-center  ">
                <div class="col-lg-5">
                    <div class="about__images">
                        <div class="image__left wow fadeInUp">
                            <img height="648" width="428" src="{{asset('assets/images/pages/resturant/1.webp')}}" alt="">
                        </div>
                        <div class="image__right wow fadeInUp">
                            <img width="428" height="648" src="{{asset('assets/images/pages/resturant/2.webp')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="about__content">
                    <span class="h6 subtitle__icon__two d-block wow fadeInUp">Hotel Experience</span>
                        <h2 class="font-xl wow fadeInUp">From Farm to Fork: Enjoy Fresh, Seasonal Dishes at Bokinn</h2>
                        <p class="font-sm mt-30 wow fadeInUp" data-wow-delay=".3s">
                            Welcome to Bokinn, where luxury meets comfort in the heart of canada. Since 1999, 
                            we have been dedicated to providing an exceptional stay for our guests, blending 
                            modern amenities with timeless elegance.Our beautifully designed rooms and suites 
                            offer stunning views and plush accommodations, ensuring a restful retreat whether 
                            you're here for business or leisure.
                        </p>
                        <div class="reservation__meta wow fadeInUp">
                            <div class="reservation__item">
                                <p class="font-sm">Reservation By Phone</p>
                                <a href="tel:+12505550199"><img src="{{asset('assets/images/icon/phone.svg')}}" alt=""> +12505550199</a>
                            </div>
                            <div class="reservation__item">
                                <p class="font-sm">Opening Hours</p>
                                <span><img src="{{asset('assets/images/icon/clock.svg')}}" alt="">10 Am - 12Pm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us end -->

    <!-- restaurant room -->
    <div class="rts__section section__padding">
        <div class="container">
            <div class="row justify-content-center text-center mb-40">
                <div class="col-lg-7 wow fadeInUp" data-wow-delay=".3s">
                    
                    @php 
                        $top = "Gallery";
                        $title = "Our Restaurant Gallery";
                    @endphp
                    @include('Frontend.Components.sec-top',compact('top','title'))
                    <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest Each room features plush bedding.</p>
                </div>
            </div>
            <div class="row g-30 gallery">
                
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/resturant/gallery/1.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/resturant/gallery/1.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/resturant/gallery/2.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/resturant/gallery/2.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/resturant/gallery/3.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/resturant/gallery/3.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/resturant/gallery/4.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/resturant/gallery/4.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="gallery__item">
                        <a href="{{asset('assets/images/pages/resturant/gallery/5.webp')}}" class="gallery__link">
                            <img class="rounded-2 img-fluid" src="{{asset('assets/images/pages/resturant/gallery/5.webp')}}" alt="gallery">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- restaurant room end -->

    <!-- restaurant menu -->
    <div class="rts__section resturant__menu__bg section__padding">
        <div class="container">
            <div class="row">
                <div class="section__wrapper mb-40 wow fadeInUp">
                    <div class="section__content__left">
                    <span class="h6 subtitle__icon__two d-block wow fadeInUp">Menu</span>
                        <h2 class="content__title h2 lh-1">Restaurant Menu</h2>
                    </div>
                    <div class="section__content__right">
                        <p>Our rooms offer a harmonious blend of comfort and elegance, designed to provide an exceptional stay for every guest. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="resturant__menu__list">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">Small Plates</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cold" aria-controls="cold">Cold Appetizers</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#vegan" aria-controls="vegan">Vegetarian & Vegan</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#burger" type="button" role="tab" aria-controls="burger" aria-selected="true">Burgers & Sandwiches</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#dips" aria-controls="dips">Dips & Spreads</button>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#seafood" aria-controls="seafood">Seafood Specialties</button>
                        </div>
                    </div>
                    <!-- resturant menu content -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all">
                            <div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/1.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/2.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/3.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/4.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/5.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/6.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="cold" role="tabpanel" aria-labelledby="cold"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/1.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/2.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/3.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/4.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/5.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/6.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div></div>
                        <div class="tab-pane fade" id="vegan" role="tabpanel" aria-labelledby="vegan"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/1.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/2.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/3.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/4.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/5.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/6.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div></div>
                        <div class="tab-pane fade" id="burger" role="tabpanel" aria-labelledby="burger"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/1.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/2.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/3.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/4.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/5.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/6.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div></div>
                            <div class="tab-pane fade" id="dips" role="tabpanel" aria-labelledby="dips"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/1.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/2.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/3.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/4.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/5.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/6.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                            <div class="tab-pane fade" id="seafood" role="tabpanel" aria-labelledby="seafood"><div class="all__menu__list">
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/1.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/2.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/3.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/4.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
    
                                <div class="single__menu__item__list">
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/5.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Tuscan Herb-Crusted Chicken</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                    <!-- single menu item -->
                                    <div class="single__menu__item">
                                        <div class="menu__thumb">
                                            <img height="78" width="78" src="{{asset('assets/images/pages/resturant/6.jpg')}}" alt="">
                                        </div>
                                        <div class="menu__meta">
                                            <div class="menu__link__price">
                                                <a href="#" class="h6">Classic Bolognese with Fresh</a>
                                                <span class="h6">$120</span>
                                            </div>
                                            <span>Salted caramel,Puff pastry,salad</span>
                                        </div>
                                    </div>
                                    <!-- single menu item end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- resturant menu content end -->
                </div>
            </div>
        </div>
    </div>
    <!-- restaurant menu end -->

    <!-- client testimonial  -->
    <div class="rts__section testimonial section__padding">
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

    @include('Frontend.Footer.footer__common')
@endsection
