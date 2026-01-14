<header class="header-two">
    <a href="{{ url('#') }}" class="nav-btn">
        <span></span>
        <span></span>
        <span></span>
    </a>
    <div class="header-two-top">
        <div class="container">
            <div class="row align-items-center justify-content-between flex-nowrap">

                <!-- Logo -->
                <div class="col-lg-auto logo-two-cover">
                    <a href="{{ url('/') }}" class="header-logo">
                        <img src="{{ asset('assets/frontend/img/resources/logo.png') }}" alt="logo">
                    </a>
                </div>

                <!-- Phone -->
                <div class="col-auto header-top-info">
                    <ul class="header-two-phone header-cont mb-0">
                        <li>
                            <a href="https://wa.me/96552222347" target="_blank">
                                <i class="fas fa-phone"></i> +965 5222 2347
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Address -->
                <div class="col-auto header-top-info">
                    <ul class="header-two-adr header-cont mb-0">
                        <li>
                            <a href="https://maps.app.goo.gl/rn4eWwFDc815gEyN6">
                                <i class="fas fa-map-marker-alt"></i> Kuwait International Fairgrounds
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Buttons -->
                <div class="col-auto header-two-btn d-flex" style="gap: 0.5rem">
                    <a style="padding: 0 5px;" class="btn-gold" href="{{ url('/visitor-booking') }}">Free
                        visitor pass</a>
                    <a style="padding: 0 5px;" class="btn" href="{{ url('/speaker-booking') }}">Become a
                        speaker</a>
                    <a style="padding: 0 10px;" href="{{ url('/login') }}" class="btn">Login</a>
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
                            <!-- Home -->
                            <li class="{{ Request::is('/') ? 'active' : '' }}">
                                <a href="{{ url('/') }}">Home</a>
                            </li>

                            <!-- About -->
                            <li class="{{ Request::is('about') ? 'active' : '' }}">
                                <a href="{{ url('/about') }}">About us</a>
                            </li>

                            <!-- Expo & Summit  -->
                            <li class="{{ Request::is('expo-summit') ? 'active' : '' }}">
                                <a href="{{ url('/expo-summit') }}">Expo & Summit</a>
                            </li>

                            <!-- Speakers -->
                            <!-- <li class="{{ Request::is('speakers') ? 'active' : '' }}">
                                <a href="{{ url('/speakers') }}">Speakers</a>
                            </li> -->

                            <!-- Exhibitors -->
                            <li class="{{ Request::is('exhibitors') ? 'active' : '' }}">
                                <a href="{{ url('/exhibitors') }}">Exhibitors</a>
                            </li>

                            <!-- Influencers -->
                            <li class="{{ Request::is('Influencer') ? 'active' : '' }}">
                                <a href="{{ url('/Influencer') }}">Influencer</a>
                            </li>
                            <!-- Pages Dropdown -->
                            <li class="dropdown">
                                <a href="#">Company <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul>
                                    {{-- <li class="{{ Request::is('privacy') ? 'active' : '' }}">
                                        <a href="{{ url('/privacy') }}">Privacy Policy</a>
                                    </li>
                                    <li class="{{ Request::is('error-404') ? 'active' : '' }}">
                                        <a href="{{ url('/error-404') }}">404</a>
                                    </li> --}}
                                    <!-- Contact -->
                                    <!-- PROFXMEDIA Marketing Partner  -->
                                    <li class="{{ Request::is('profxmedia') ? 'active' : '' }}">
                                        <a href="{{ url('/profxmedia') }}">PROFX MEDIA</a>
                                    </li>
                                    <!-- Gallery -->
                                    <li class="{{ Request::is('gallery') ? 'active' : '' }}">
                                        <a href="{{ url('/gallery') }}">Gallery</a>
                                    </li>

                                    <!-- News -->
                                    <!-- <li class="{{ Request::is('news') ? 'active' : '' }}">
                                        <a href="{{ url('/news') }}">News</a>
                                    </li> -->
                                    <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                        <a href="{{ url('/contact') }}">Contacts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="{{ Request::is('login') ? 'active' : '' }}">
                                <a href="{{ url('/login') }}">Login</a>
                            </li>

                            <!-- Mobile-only CTA buttons -->
                            <li class="mobile-only-cta">
                                <a style="color: #fff; padding: 0 30px;" class="mob-btn-1 mb-2"
                                    href="{{ url('/visitor-booking') }}">
                                    Free visitor pass
                                </a>
                            </li>
                            <li class="mobile-only-cta">
                                <a style="color: #fff; padding: 0 30px;" class="mob-btn-2"
                                    href="{{ url('/speaker-booking') }}">
                                    Become a speaker
                                </a>
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
