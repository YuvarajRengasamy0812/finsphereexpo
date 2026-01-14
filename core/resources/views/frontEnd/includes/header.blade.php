@php
    use Illuminate\Support\Facades\Auth;
@endphp



<style>
    /* ===== Common Overlay ===== */
    .bv-modal-overlay,
    .bs-modal-overlay,
    .be-modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.7);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1050;
    }

    /* ===== Base Modal ===== */
    .bv-modal,
    .bs-modal,
    .be-modal {
        background: #fff;
        padding: 30px;
        width: 90%;
        max-width: 420px;
        border-radius: 8px;
        position: relative;
        max-height: 85vh;
        display: flex;
        flex-direction: column;
    }

    /* ===== Modal Accent ===== */
    .bv-modal,
    .bs-modal,
    .be-modal {
        border-top: 5px solid #976737;
    }

    /* ===== Headings ===== */
    .bv-modal h3,
    .bs-modal h3,
    .be-modal h3 {
        background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
        font-weight: bold;
    }

    /* ===== Close Buttons ===== */
    .bv-close,
    .bs-close,
    .be-close {
        position: absolute;
        top: 12px;
        right: 14px;
        font-size: 22px;
        cursor: pointer;
        color: #976737;
    }

    /* ===== Forms ===== */
    .bv-form,
    .bs-form,
    .be-form {
        margin-top: 20px;
        overflow-y: auto;
        padding-right: 6px;
    }

    .bv-field,
    .bs-field,
    .be-field {
        margin-bottom: 15px;
    }

    .bv-field label,
    .bs-field label,
    .be-field label {
        display: block;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 6px;
        color: #3E615D;
    }

    .bv-field input,
    .bs-field input,
    .be-field input,
    .bs-field textarea,
    .be-field textarea {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 14px;
    }

    /* Accessible focus */
    .bv-field input:focus,
    .bs-field input:focus,
    .be-field input:focus,
    .bs-field textarea:focus,
    .be-field textarea:focus {
        border-color: #976737;
        box-shadow: 0 0 0 2px rgba(151, 103, 55, 0.25);
    }

    /* ===== Actions ===== */
    .bv-actions,
    .bs-actions,
    .be-actions {
        margin-top: 20px;
        text-align: right;
    }

    /* ===== Scrollbar (optional) ===== */
    .bv-form::-webkit-scrollbar,
    .bs-form::-webkit-scrollbar,
    .be-form::-webkit-scrollbar {
        width: 6px;
    }

    .bv-form::-webkit-scrollbar-thumb,
    .bs-form::-webkit-scrollbar-thumb,
    .be-form::-webkit-scrollbar-thumb {
        background: #976737;
        border-radius: 4px;
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
                            <a href="https://maps.app.goo.gl/rn4eWwFDc815gEyN6">
                                <i class="fas fa-map-marker-alt"></i> Kuwait International Fairgrounds
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Buttons -->
<div class="col-auto header-two-btn d-flex" style="gap: 0.5rem">

    {{-- Free visitor pass button --}}
    <a style="padding: 0 5px;" href="javascript:void(0)" class="btn-gold" onclick="bvOpenModal()">Free visitor pass</a>

    {{-- Become a speaker button (always visible) --}}
    <a style="padding: 0 5px;" href="javascript:void(0)" class="btn" onclick="bsOpenModal()">Become a speaker</a>

    {{-- Check if user is logged in --}}
    @if(Auth::check())
        {{-- Show profile dropdown if logged in --}}
        <div class="dropdown">
       
            <ul class="dropdown-menu" aria-labelledby="profileDropdown">
                <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item" type="submit">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    @else
        {{-- Show login button only if not logged in --}}
        <a style="padding: 0 10px;" href="{{ url('/login') }}" class="btn">Login</a>
    @endif

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
                                <a style="color: #fff; padding: 0 30px;" href="javascript:void(0)" class="mob-btn-1 mb-2" onclick="bvOpenModal()">
                                    Free visitor pass
                                </a>
                            </li>
                            <li class="mobile-only-cta">
                                <a style="color: #fff; padding: 0 30px;" href="javascript:void(0)" class="mob-btn-2" onclick="bsOpenModal()">
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
