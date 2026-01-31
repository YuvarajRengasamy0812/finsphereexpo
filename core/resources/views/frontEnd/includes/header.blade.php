@php
    use Illuminate\Support\Facades\Auth;
@endphp


<style>
    /* ===== Profile Container ===== */
    .header-profile {
        position: relative;
        display: inline-block;
        cursor: pointer;
    }

    /* ===== Avatar ===== */
    .profile-avatar {
        width: 50px;
        height: 50px;
        border: 2px solid transparent;
        border-radius: 50px;
        background:
            linear-gradient(#ffffff, #ffffff) padding-box,
            linear-gradient(to right, #c19a5f, #976737, #6b4a26) border-box;
        transition: transform 0.3s ease;
    }

    .header-profile:hover .profile-avatar {
        transform: scale(1.1);
    }

    /* ===== Dropdown ===== */
    .profile-dropdown {
        position: absolute;
        top: 57px;
        right: 0;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        list-style: none;
        min-width: 160px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        z-index: 100;
        padding: 5px 0;
    }

    /* Show dropdown on hover */
    .header-profile:hover .profile-dropdown {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    /* Dropdown items */
    .profile-dropdown li {
        margin: 0;
        padding: 0;
    }

    /* Links & Buttons inside dropdown */
    .profile-dropdown li a,
    .profile-dropdown li button {
        display: flex;
        align-items: center;
        gap: 10px;
        width: 100%;
        padding: 12px 20px;
        background: transparent;
        border: none;
        color: #333;
        font-weight: 500;
        text-decoration: none;
        cursor: pointer;
        transition: all 0.2s ease;
        text-align: left;
    }

    /* Hover effect */
    .profile-dropdown li a:hover,
    .profile-dropdown li button:hover {
        background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
        color: #fff;
    }

    .profile-dropdown li button i,
    .profile-dropdown li a i {
        width: 18px;
        text-align: center;
    }

    /* Optional: add smooth icon + text alignment */
    .profile-dropdown li a i,
    .profile-dropdown li button i {
        font-size: 16px;
    }

    @media (max-width: 767.98px) {
        .desktop-lang {
            display: none !important;
        }
    }

    @media (max-width: 767px) {
        .lang-mobile {
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-start;
            display: block !important;
        }
    }

    @media (min-width: 768px) {
        .lang-mobile {
            display: none !important;
        }
    }
</style>
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
                            <a href="https://maps.app.goo.gl/1MbF5Gcgimr4dVHU8">
                                <i class="fas fa-map-marker-alt"></i> Kuwait - Al Badriya Ballroom
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Buttons -->

                <div class="col-auto header-two-btn d-flex" style="gap: 0.5rem">

                    {{-- Always visible button --}}
                    <a style="padding: 0 5px;" class="btn" href="{{ url('/visitor-booking') }}">Free visitor
                        pass</a>

                    {{-- Become a speaker button changes route depending on login --}}
                    <a style="padding: 0 5px;" class="btn"
                        href="{{ Auth::check() ? url('/speaker-booking') : url('/login') }}">
                        Become a speaker
                    </a>

                    @if (Auth::check())
                        {{-- Logged in: show profile dropdown --}}
                        <div class="header-profile">
                            <img src="{{ asset('assets/frontend/img/profile.png') }}" alt="Profile"
                                class="profile-avatar">
                            <ul class="profile-dropdown">
                                <li><a href="{{ url('/profile') }}"><i class="fas fa-user"></i> Profile</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit">
                                            <i class="fas fa-sign-out-alt"></i>
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        {{-- Not logged in: show login/register links --}}
                        <a style="padding: 0 5px;" href="{{ url('/login') }}" class="btn">Login</a>
                    @endif

                </div>


            </div>

        </div>
    </div>

    </div>
    <div class="header-menu header-menu-two">
        <div class="container">
            <div class="row">
                <div class="col-11">
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
                            {{-- <li class="{{ Request::is('speakers') ? 'active' : '' }}">
                                <a href="{{ url('/speakers') }}">Speakers</a>
                            </li> --}}

                            <!-- Exhibitors -->
                            <li class="{{ Request::is('exhibitors') ? 'active' : '' }}">
                                <a href="{{ url('/exhibitors') }}">Exhibitors</a>
                            </li>

                            <!-- Floorplan -->
                            <li class="{{ Request::is('floorplan') ? 'active' : '' }}">
                                <a href="{{ url('/floorplan') }}">Floorplan</a>
                            </li>

                            <!-- Influencers -->
                            <li class="{{ Request::is('Influencer') ? 'active' : '' }}">
                                <a href="{{ url('/Influencer') }}">Influencer</a>
                            </li>
                            <!-- Pages Dropdown -->
                            <li class="dropdown">
                                <a href="#">Company <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <ul>
                                    <!-- PROFXMEDIA Marketing Partner  -->
                                    <li class="{{ Request::is('profxmedia') ? 'active' : '' }}">
                                        <a href="{{ url('/profxmedia') }}">PROFX MEDIA</a>
                                    </li>
                                    <!-- Gallery -->
                                    <li class="{{ Request::is('gallery') ? 'active' : '' }}">
                                        <a href="{{ url('/gallery') }}">Gallery</a>
                                    </li>

                                    <!-- News -->
                                    {{-- <li class="{{ Request::is('news') ? 'active' : '' }}">
                                        <a href="{{ url('/news') }}">News</a>
                                    </li> --}}
                                    <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                        <a href="{{ url('/contact') }}">Contacts</a>
                                    </li>
                                </ul>
                            </li>
                            {{-- <li class="{{ Request::is('login') ? 'active' : '' }}">
                                <a href="{{ url('/login') }}">Login</a>
                            </li> --}}

                            <li class="desktop-lang">@include('frontEnd.includes.gtranslater')</li>

                            <!-- Mobile-only CTA buttons -->
                            <li class="mobile-only-cta">
                                <a style="color: #fff; padding: 0 30px;" href="javascript:void(0)"
                                    class="mob-btn-1 mb-2" onclick="bvOpenModal()">
                                    Free visitor pass
                                </a>
                            </li>
                            <li class="mobile-only-cta">
                                <a style="color: #fff; padding: 0 30px;" href="javascript:void(0)" class="mob-btn-2"
                                    onclick="bsOpenModal()">
                                    Become a speaker
                                </a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="col-1">
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
