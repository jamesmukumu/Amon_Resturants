    <!-- header area -->
    <div class="header__top">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="social__links">
                        <a class="link__item gap-10" href="callto:#"><i class="flaticon-phone-flip"></i> +254704550595</a>
                        <a class="link__item gap-10" href="mailto:#"><i class="flaticon-envelope"></i>amon@gmail.com</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="location">
                        <a class="link__item gap-10" href="#"><i class="flaticon-marker"></i>Nakuru City</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="main__header header__function">
        <div class="container">
            <div class="row">
                <div class="main__header__wrapper">
                    <div class="main__nav">
                        @include('Frontend.Header.nav')
                    </div>
                    <div class="main__logo">
                        <a href="{{ route('index') }}">
                            <img 
                              src="https://res.cloudinary.com/dasrniwpk/image/upload/v1751045740/WhatsApp_Image_2025-06-27_at_13.12.36_5a7b9a53_lphc1h.jpg" 
                              alt="amon logo" 
                              class="img-fluid" 
                              style="max-height: 90px; object-fit: contain;"
                            >
                          </a>
                          
                    </div>
                    <div class="main__right">

                        <a href="{{route('room-details-1')}}" class="theme-btn btn-style sm-btn fill"><span>Book Now</span></a>
                        <button class="theme-btn btn-style sm-btn fill menu__btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <span><img src="{{asset('assets/images/icon/menu-icon.svg')}}" alt=""></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->