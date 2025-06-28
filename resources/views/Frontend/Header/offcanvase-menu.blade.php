    <!-- offcanvase menu -->
    <div class="offcanvas offcanvas-start" id="offcanvasRight">
        <div class="rts__btstrp__offcanvase">
            <div class="offcanvase__wrapper">
                <div class="left__side mobile__menu">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="offcanvase__top">
                        <div class="offcanvase__logo">
                            <a href="{{ route('index') }}">
                                <img 
                                  src="https://res.cloudinary.com/dasrniwpk/image/upload/v1751045740/WhatsApp_Image_2025-06-27_at_13.12.36_5a7b9a53_lphc1h.jpg" 
                                  alt="amon logo" 
                                  class="img-fluid" 
                                  style="max-height: 90px; object-fit: contain;"
                                >
                              </a>
                        </div>
                        <p class="description">
                            Welcome to Amon Resturant, where luxury meets comfort in the heart of Nakuru City
                        </p>
                    </div>
                    <div class="offcanvase__mobile__menu">
                        <div class="mobile__menu__active"></div>
                    </div>
                    <div class="offcanvase__bottom">
                        <div class="offcanvase__address">

                            <div class="item">
                                <span class="h6">Phone</span>
                                <a href="tel:+1234567890"><i class="flaticon-phone-flip"></i>+254704550595</a>
                            </div>
                            <div class="item">
                                <span class="h6">Email</span>
                                <a href="mailto:info@hostie.com"><i class="flaticon-envelope"></i>amon@gmail.com</a>
                            </div>
                            <div class="item">
                                <span class="h6">Address</span>
                                <a href="#"><i class="flaticon-marker"></i>Nakuru City</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="right__side desktop__menu">
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    <div class="rts__desktop__menu">
                       <nav class="desktop__menu offcanvas__menu">
                            <ul class="list-unstyled">
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="#">Home
                                    <span class="toggle"></span>
                                    </a>
                                   
                                </li>
                              
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="#">Rooms
                                    <span class="toggle"></span>
                                    </a>
                                    <ul class="slide__menu">
                                        @foreach ($featureRooms as  $room)
                        <li role="menuitem"><a href="">{{$room['roomName']}}</a></li>
                      
                        @endforeach
                                    </ul>
                                </li>
                            
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="#">Overview
                                    <span class="toggle"></span>
                                    </a>
                                    <ul class="slide__menu">
                                        <li><a href="{{route('restaurant')}}">Resturant</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('service')}}">Service</a></li>
                                        <li><a href="{{route('event')}}">Event</a></li>
                                        <li><a href="{{route('activities')}}">Activities</a></li>
                                    </ul>
                                </li>
                                <li class="slide has__children">
                                    <a class="slide__menu__item" href="{{route('contact')}}">Contact Us
                                    </a>
                                    
                                </li>
                            </ul>
                       </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvase menu end -->