
    <!-- footer style three -->
    <footer class="rts__section rts__footer is__home__three footer__background has__shape">
        <div class="section__shape">
            <div class="shape__1 wow fadeInLeft">
                <img src="{{asset('assets/images/footer/shape-1.svg')}}" alt="">
            </div>
            <div class="shape__2">
                <img src="{{asset('assets/images/footer/shape-2.svg')}}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="footer__widget__wrapper">
                    <div class="rts__widget">
                        <a href="{{route('index')}}"><img src="{{asset('assets/images/logo/logo.svg')}}" alt="footer logo"></a>
                        <p class="font-sm max-290 mt-20">
                            Each room features plush bedding, high-quality linens, and a selection of ensure a restful night's sleep.
                        </p>
                    </div>
                    <div class="rts__widget">
                        <span class="widget__title">Quick Links</span>
                        <ul>
                            <li><a href="#">Rooms & Suites</a></li>
                            <li><a href="#">Dining</a></li>
                            <li><a href="#">Spa & Wellness</a></li>
                            <li><a href="#">Special Offers</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                    <div class="rts__widget">
                        <span class="widget__title">Contact Us</span>
                        <ul>
                            <li><a href="tel:+12505550199"><i class="flaticon-phone-flip"></i> +12505550199</a></li>
                            <li><a href="mailto:UjJw6@example.com"><i class="flaticon-envelope"></i>Moonlit@gmail.com</a></li>
                            <li><a href="#"><i class="flaticon-marker"></i> M5T 2L9 Toronto, Canada</a></li>
                        </ul>
                    </div>
                    <div class="rts__widget if__is__newsletter">
                        <span class="widget__title">Get In Touch</span>
                        <form action="#" class="footer__form">
                            <!-- single input -->
                            <div class="query__input">
                                <div class="query__input__position">
                                    <input type="text" id="name" name="name" placeholder="Your Name" required>
                                    <div class="query__input__icon">
                                        <i class="flaticon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- single input end -->

                            <!-- single input -->
                            <div class="query__input">
                                <div class="query__input__position">
                                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                                    <div class="query__input__icon">
                                        <i class="flaticon-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- single input end -->
                            <!-- single input -->
                            <div class="query__input">
                                <div class="query__input__position">
                                    <textarea id="msg" name="msg" placeholder="Your Message" required></textarea>
                                    <div class="query__input__icon if__is__textarea">
                                        <img src="{{asset('assets/images/icon/message.svg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- single input end -->
                            <button type="submit" class="theme-btn btn-style fill no-border submit__btn">
                                <span>
                                    Submit Now
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright__text">
            <div class="container">
                <div class="row">
                    <div class="copyright__wrapper">
                        <p class="mb-0">Copyright © {{ date('Y') }} Moonlit. All rights reserved.</p>
                        <div class="footer__social__link">
                            <a href="#" class="link__item">Facebook</a>
                            <a href="#" class="link__item">Linkedin</a>
                            <a href="#" class="link__item">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </footer>
    <!-- footer style three end -->