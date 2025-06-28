  <!-- header area -->
  <div class="header__absolute">
        <div class="header__top is__home__video">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-6">
                        <div class="social__links">
                            <a class="link__item gap-10" href="callto:#"><i class="flaticon-phone-flip"></i> +12505550199</a>
                            <a class="link__item gap-10" href="mailto:#"><i class="flaticon-envelope"></i> moonlit@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="location">
                            <a class="link__item gap-10" href="#"><i class="flaticon-marker"></i>280 Augusta Avenue, M5T 2L9 Toronto, Canada</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="main__header header__function is__home__video">
            <div class="container">
                <div class="row">
                    <div class="main__header__wrapper">
                        <div class="main__nav">
                            @include('Frontend.Header.nav')
                        </div>
                        <div class="main__logo">
                            <a href="{{route('index')}}"><img class="logo__class" src="{{asset('assets/images/logo/logo__two.svg')}}" alt="moonlit"></a>
                        </div>
                        <div class="main__right">
                            <a href="#" class="theme-btn btn-style sm-btn border d-none d-lg-block" aria-label="Login Button" data-bs-toggle="modal" data-bs-target="#loginModal"><span>Sign In</span></a>
                            <a href="#" class="theme-btn btn-style sm-btn border d-none d-lg-block" aria-label="Sign Up Button" data-bs-toggle="modal" data-bs-target="#signupModal"><span>Sign Up</span></a>
                            <a href="{{route('room-details-1')}}" class="theme-btn btn-style sm-btn fill"><span>Book Now</span></a>
                            <button class="theme-btn btn-style sm-btn fill menu__btn d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <span><img src="{{asset('assets/images/icon/menu-icon.svg')}}" alt=""></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <!-- header area end -->