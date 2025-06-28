<div class="navigation d-none d-lg-block">
    <nav class="navigation__menu" id="main__menu">
        <ul class="list-unstyled">
            <li class="navigation__menu--item ">
                <a href="#" class="navigation__menu--item__link">Home</a>
               
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Accomodations</a>
                <ul class="submenu sub__style" role="menu">
                    <li role="menuitem" class="has-child has-arrow">
                        <a href="#">Rooms available</a>
                        <ul class="sub__style" role="menu">
                        @foreach ($featureRooms as  $room)
                        <li role="menuitem"><a href="">{{$room['roomName']}}</a></li>
                      
                        @endforeach
                        </ul>
                    </li>
                
                </ul>
            </li>

            <li class="navigation__menu--item has-child has-arrow">
                <a href="#" class="navigation__menu--item__link">Overview</a>
                <ul class="submenu sub__style" role="menu">
				
                    <li role="menuitem"><a href="{{route('restaurant')}}">Restaurant</a></li>
                    <li role="menuitem"><a href="{{route('gallery')}}">Gallery</a></li>
                    <li role="menuitem"><a href="{{route('service')}}">Conferences</li>
                    <li role="menuitem"><a href="{{route('event')}}">Events</a></li>
                    <li role="menuitem"><a href="{{route('activities')}}">Activities</a></li>
                </ul>
            </li>
         
            <li class="navigation__menu--item">
                <a href="{{route('contact')}}" class="navigation__menu--item__link">About</a>
            </li>
            <li class="navigation__menu--item">
                <a href="{{route('contact')}}" class="navigation__menu--item__link">Contact</a>
            </li>
        </ul>
    </nav>
</div>
