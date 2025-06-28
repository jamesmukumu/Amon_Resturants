    <!-- footer -->
    <footer class="rts__section rts__footer is__home__five footer__background has__shape">
        <div class="container">
            <div class="row">
                <div class="footer__widget__wrapper">
                    <div class="rts__widget">
                        <a href="{{route('index')}}"><img src="{{asset('assets/images/logo/logo.svg')}}" alt="footer logo"></a>
                        <p class="font-sm max-290 mt-20">Each room features plush bedding, high-quality linens, and a selection of ensure a restful night's sleep.</p>
                    </div>
                    <div class="rts__widget">
                        <span class="widget__title">Guest Services</span>
                        <ul>
                            <li><a href="#">24/7 Front Desk</a></li>
                            <li><a href="#">Parking</a></li>
                            <li><a href="#">Room Service</a></li>
                            <li><a href="#">Free Wi-Fi</a></li>
                            <li><a href="#">Concierge Service</a></li>
                        </ul>
                    </div>
                    
                    <div class="rts__widget">
                        <span class="widget__title">Contact Us</span>
                        <ul>
                            <li><a href="tel:+12505550199"><i class="flaticon-phone-flip"></i> +12505550199</a></li>
                            <li><a href="mailto:UjJw6@example.com"><i class="flaticon-envelope"></i>Moonlit@gmail.com</a></li>
                            <li><a href="#"><i class="flaticon-marker"></i>M5T 2L9 Toronto, Canada</a></li>
                        </ul>
                    </div>
                    <div class="rts__widget">
                        <span class="widget__title">Join Our Newsletter</span>
                        <div class="rts__form footer__newsletter">
                            <form action="#" method="post">
                                <input type="email" name="email" id="subscription" placeholder="Enter your mail" required="">
                                <button type="submit">Subscribe</button>
                            </form>
                        </div>
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
    <!-- footer end -->