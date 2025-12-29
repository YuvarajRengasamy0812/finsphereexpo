<header class="header-two">
    <a href="{{ url('#') }}" class="nav-btn">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <div class="header-two-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-3 logo-two-cover">
                    <a href="{{ url('/') }}" class="header-logo">
                        <img src="{{ asset('assets/frontend/img/resources/logo.png') }}" alt="logo">
                        {{-- <div class="logo-text"><span>info</span>rmex</div> --}}
                    </a>
                </div>
                <div class="col-3 header-top-info">
                    <ul class="header-two-phone header-cont">
                        <li><a href="tel:18008763765"><i class="fas fa-phone"></i>1-800-8763-765</a></li>
                    </ul>
                </div>
                <div class="col-3 header-top-info">
                    <ul class="header-two-adr header-cont">
                        <li><a href="{{ url('/contact') }}"><i class="fas fa-map-marker-alt"></i>Kuwait (Venue: TBD)</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 header-two-btn">
                    <a href="{{ url('/events') }}" class="btn">show all events</a>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu header-menu-two">
        <div class="container">
            <div class="row">
                <div class="col-10">
                    <nav class="nav-menu">
                        <ul class="nav-list">

                            <!-- Home Dropdown -->
                            {{-- <li class="dropdown">
                                <a>Home <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul>
                                    <li class="{{ Request::is('/') ? 'active' : '' }}">
                                        <a href="{{ url('/') }}">Home 1</a>
                                    </li>
                                    <li class="{{ Request::is('home1') ? 'active' : '' }}">
                                        <a href="{{ url('/home1') }}">Home 2</a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>

                            <!-- About -->
                            <li class="{{ Request::is('about') ? 'active' : '' }}">
                                <a href="{{ url('/about') }}">About us</a>
                            </li>

                            <!-- Events -->
                            {{-- <li class="{{ Request::is('events') ? 'active' : '' }}">
                                <a href="{{ url('/events') }}">Events</a>
                            </li> --}}

                            <!-- Expo & Summit  -->
                            <li class="{{ Request::is('expo-summit') ? 'active' : '' }}">
                                <a href="{{ url('/expo-summit') }}">Expo & Summit</a>
                            </li>

                            <!-- Speakers -->
                            <li class="{{ Request::is('speakers') ? 'active' : '' }}">
                                <a href="{{ url('/speakers') }}">Speakers</a>
                            </li>

                            <!-- Gallery -->
                            <li class="{{ Request::is('gallery') ? 'active' : '' }}">
                                <a href="{{ url('/gallery') }}">Gallery</a>
                            </li>

                            <!-- News -->
                            <li class="{{ Request::is('news') ? 'active' : '' }}">
                                <a href="{{ url('/news') }}">News</a>
                            </li>
                            <!-- Pages Dropdown -->
                            <li
                                class="dropdown">
                                <a href="#">Pages <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul>
                                     <li class="{{ Request::is('exhibitors') ? 'active' : '' }}">
                                        <a href="{{ url('/exhibitors') }}">Exhibitors</a>
                                    </li>
                                    <li class="{{ Request::is('privacy') ? 'active' : '' }}">
                                        <a href="{{ url('/privacy') }}">Privacy Policy</a>
                                    </li>
                                    <li class="{{ Request::is('error-404') ? 'active' : '' }}">
                                        <a href="{{ url('/error-404') }}">404</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Contact -->
                            <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                <a href="{{ url('/contact') }}">Contacts</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-2">
                    <div class="header-two-search">
                        <div class="header-search-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <form action="#">
                            <input type="search" name="search" placeholder="Search">
                            <button class="btn-search" type="submit"><i class="fa fa-search"
                                    aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
