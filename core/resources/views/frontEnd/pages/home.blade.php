@extends('frontEnd.layouts.master')

@section('title', 'FinSphere Expo Kuwait')
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css"> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script> --}}
{{-- <style>
    /* Optional custom styles for Toastify */
    .toastify {
        font-weight: bold;
    }
</style> --}}
@section('content')

        {{-- Toastify Alerts --}}
        @if (session('success'))
            <script>
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#4CAF50",
                    stopOnFocus: true
                }).showToast();
            </script>
        @endif

        @if ($errors->any())
            <script>
                Toastify({
                    text: "{{ $errors->first() }}",
                    duration: 4000,
                    close: true,
                    gravity: "top",
                    position: "right",
                    backgroundColor: "#f44336",
                    stopOnFocus: true
                }).showToast();
            </script>
        @endif
    <!--==================== MAIN-TWO ====================-->
    @include('frontEnd.includes.home-banner')
    <!--=================== MAIN-TWO END ===================-->

    <!--==================== S-ABOUT ====================-->
    @include('frontEnd.includes.about-snippet')
    <!--================== S-ABOUTK END ==================-->

    <!--==================== EVENT HIGHLIGHTS ====================-->
    @include('frontEnd.includes.event-highlight-snippet')
    <!--================== EVENT HIGHLIGHTS END ==================-->

    <!--==================== Industry Sector ====================-->
    @include('frontEnd.includes.industry-sector')
    <!--================== Industry Sector END ==================-->

    <!--==================== MARKETING-PARTNER ====================-->
    @include('frontEnd.includes.marketing-partner')
    <!--================== MARKETING-PARTNER END ==================-->

    <!--================== OUR-SPEAKERS ==================-->
    {{-- <section class="our-speakers speakers-home-two">
        <div class="bg-img" style="background-image: url('assets/frontend/img/bg-team-home-2.svg');"></div>
        <span class="title-position title-position-left">Speakers</span>
        <span class="title-position title-position-right">Experts</span>
        <div class="container">
            <h2 class="title-line">Our Speakers</h2>
            <p class="slogan">They possess the secret knowledge and interesting experience of creating a digital product.
            </p>
            <div class="our-speakers-cover">
                <div class="speaker-item">
                    <div class="speaker-item-img">
                        <img class="lazy" src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                            data-src="{{ asset('assets/frontend/img/speaker-1.jpg') }}" alt="img">
                    </div>
                    <div class="speaker-item-content">
                        <h3>Anthony Watson</h3>
                        <div class="prof">CEO, IT Metrix</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <ul class="soc-link">
                            <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/rovadex"><i
                                        class="fab fa-behance"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="speaker-item">
                    <div class="speaker-item-img">
                        <img class="lazy" src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                            data-src="{{ asset('assets/frontend/img/speaker-2.jpg') }}" alt="img">
                    </div>
                    <div class="speaker-item-content">
                        <h3>Marybeth Hoover</h3>
                        <div class="prof">CEO, IT Metrix</div>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                        <ul class="soc-link">
                            <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/rovadex"><i
                                        class="fab fa-behance"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="speaker-item">
                    <div class="speaker-item-img">
                        <img class="lazy" src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                            data-src="{{ asset('assets/frontend/img/speaker-3.jpg') }}" alt="img">
                    </div>
                    <div class="speaker-item-content">
                        <h3>Stewart Collins</h3>
                        <div class="prof">CEO, IT Metrix</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <ul class="soc-link">
                            <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/rovadex"><i
                                        class="fab fa-behance"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="speaker-item">
                    <div class="speaker-item-img">
                        <img class="lazy" src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                            data-src="{{ asset('assets/frontend/img/speaker-4.jpg') }}" alt="img">
                    </div>
                    <div class="speaker-item-content">
                        <h3>Theodora Reed</h3>
                        <div class="prof">CEO, IT Metrix</div>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                        <ul class="soc-link">
                            <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/rovadex"><i
                                        class="fab fa-behance"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="speaker-item">
                    <div class="speaker-item-img">
                        <img class="lazy" src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                            data-src="{{ asset('assets/frontend/img/speaker-5.jpg') }}" alt="img">
                    </div>
                    <div class="speaker-item-content">
                        <h3>Ronald Stanley</h3>
                        <div class="prof">CEO, IT Metrix</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <ul class="soc-link">
                            <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/rovadex"><i
                                        class="fab fa-behance"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================ OUR-SPEAKERS END ================-->

    <!--================= S-SCHEDULE-EVENT =================-->
    {{-- <section class="s-schedule-event schedule-event-home-two">
        <span class="title-position title-position-left">Program</span>
        <div class="container">
            <h2 class="title-line">Schedule of Event</h2>
            <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore.</p>
            <ul class="schedule-cover">
                <li class="active">
                    <div class="schedule-header">
                        <div class="schedule-time">10:00-11:00</div>
                        <div class="schedule-title">Check-in. morning coffee</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <h3 class="title">Good Service: Detect and avoid errors in the world of microservices</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </li>
                <li>
                    <div class="schedule-header">
                        <div class="schedule-time">11:00-12:00</div>
                        <div class="schedule-title">Anthony Watson</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <h3 class="title">Good Service: Detect and avoid errors in the world of microservices</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </li>
                <li>
                    <div class="schedule-header">
                        <div class="schedule-time">12:00-13:00</div>
                        <div class="schedule-title">lorem ipsum</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <h3 class="title">Good Service: Detect and avoid errors in the world of microservices</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </li>
                <li>
                    <div class="schedule-header">
                        <div class="schedule-time">13:00-14:00</div>
                        <div class="schedule-title">dolor sit amet</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <h3 class="title">Good Service: Detect and avoid errors in the world of microservices</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </li>
                <li>
                    <div class="schedule-header">
                        <div class="schedule-time">14:00-15:00</div>
                        <div class="schedule-title">sed do eiusmod tempor incididunt</div>
                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                    </div>
                    <div class="schedule-content">
                        <h3 class="title">Good Service: Detect and avoid errors in the world of microservices</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section> --}}
    <!--=============== S-SCHEDULE-EVENT END ===============-->

    <!--===================== S-PRICING =====================-->
    {{-- <section class="s-pricing">
        <span class="title-position title-position-right">pricing</span>
        <div class="container">
            <h2 class="title-line">Pricing Plans</h2>
            <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                labore.</p>
            <div class="pricing-cover">
                <div class="pricing-item">
                    <h4 class="pricing-header">Basic</h4>
                    <div class="pricing-item-content">
                        <div class="price">$120</div>
                        <div class="pricing-slogan title-line">access to the conference</div>
                        <div class="pricing-info">
                            <ul>
                                <li>Conference Ticket</li>
                                <li>Coffee Break</li>
                                <li>Branded T-shirt</li>
                            </ul>
                        </div>
                        <a href="{{ url('/contact') }}" class="btn btn-yellow">Buy Now</a>
                    </div>
                </div>
                <div class="pricing-item">
                    <h4 class="pricing-header">Standart</h4>
                    <div class="pricing-item-content">
                        <div class="price">$150</div>
                        <div class="pricing-slogan title-line">access to the conference</div>
                        <div class="pricing-info">
                            <ul>
                                <li>Conference Ticket</li>
                                <li>Coffee Break</li>
                                <li>Branded T-shirt</li>
                                <li>Afterparty</li>
                            </ul>
                        </div>
                        <a href="{{ url('/contact') }}" class="btn btn-yellow">Buy Now</a>
                    </div>
                </div>
                <div class="pricing-item">
                    <h4 class="pricing-header">Online</h4>
                    <div class="pricing-item-content">
                        <div class="price">$80</div>
                        <div class="pricing-slogan title-line">access to the conference</div>
                        <div class="pricing-info">
                            <p>When you purchase this package, you get an online conference recording</p>
                        </div>
                        <a href="{{ url('/contact') }}" class="btn btn-yellow">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--================== S-PRICING END ==================-->

    <!--================== S-partners ==================-->
    @include('frontEnd.includes.partners')
    <!--================ S-partners END =================-->

    <!--===================== S-VENUE =====================-->
    @include('frontEnd.includes.venue')
    <!--=================== S-VENUE END ===================-->

    <!--==================== S-PARTNERS ====================-->
    {{-- <section class="s-partners partners-home-two">
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-4 col-md-2"><img class="lazy"
                        src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                        data-src="{{ asset('assets/frontend/img/home-2-partner-1.png') }}" alt="img"></div>
                <div class="col-6 col-sm-4 col-md-2"><img class="lazy"
                        src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                        data-src="{{ asset('assets/frontend/img/home-2-partner-2.png') }}" alt="img"></div>
                <div class="col-6 col-sm-4 col-md-2"><img class="lazy"
                        src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                        data-src="{{ asset('assets/frontend/img/home-2-partner-3.png') }}" alt="img"></div>
                <div class="col-6 col-sm-4 col-md-2"><img class="lazy"
                        src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                        data-src="{{ asset('assets/frontend/img/home-2-partner-4.png') }}" alt="img"></div>
                <div class="col-6 col-sm-4 col-md-2"><img class="lazy"
                        src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                        data-src="{{ asset('assets/frontend/img/home-2-partner-5.png') }}" alt="img"></div>
                <div class="col-6 col-sm-4 col-md-2"><img class="lazy"
                        src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                        data-src="{{ asset('assets/frontend/img/home-2-partner-6.png') }}" alt="img"></div>
            </div>
        </div>
    </section> --}}
    {{-- @include('frontEnd.includes.partners') --}}
    <!--================== S-PARTNERS END ==================-->

    <!--================== CTA SECTION ==================-->
    @include('frontEnd.includes.cta-section')
    <!--================== CTA SECTION END ==================-->

@endsection
