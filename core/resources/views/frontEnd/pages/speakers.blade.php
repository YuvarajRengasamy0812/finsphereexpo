@extends('frontEnd.layouts.master')

@section('title', 'Speakers - FinSphere Expo Kuwait')

@section('content')

    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">Speakers</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Speakers</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--=================== OUR-SPEAKERS ===================-->
    <section class="our-speakers">
        <div class="container">
            <h2 class="title-line">Our Speakers</h2>
            <p class="slogan">FINSPHERE EXPO KUWAIT features influential speakers from across the global financial 
ecosystem, including CEOs, founders, analysts, educators, and technology leaders. </p>
            <div class="our-speakers-cover">
                <div class="speaker-item">
                    <div class="speaker-item-img">
                        <img src="{{ asset('assets/frontend/img/speaker-1.jpg') }}" alt="img">
                    </div>
                    <div class="speaker-item-content">
                        <h3>Anthony Watson</h3>
                        <div class="prof">CEO, IT Metrix</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        <ul class="soc-link">
                            <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/rovadex"><i class="fab fa-behance"></i></a>
                            </li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="speaker-item">
                    <div class="speaker-item-img">
                        <img src="{{ asset('assets/frontend/img/speaker-2.jpg') }}" alt="img">
                    </div>
                    <div class="speaker-item-content">
                        <h3>Marybeth Hoover</h3>
                        <div class="prof">CEO, IT Metrix</div>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa</p>
                        <ul class="soc-link">
                            <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://www.behance.net/rovadex"><i class="fab fa-behance"></i></a>
                            </li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                        class="fab fa-linkedin-in"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= OUR-SPEAKERS END =================-->

    <!--=================== S-OUR-TEAM ===================-->
    <section class="s-our-team about-team speakers-our-team">
        <div class="our-team-bg" style="background-image: url(assets/frontend/img/bg-team-about.svg);"></div>
        <div class="container">
            <h2 class="title-line">Our Team</h2>
            <p class="slogan">They possess the secret knowledge and interesting experience of creating a digital
                product.</p>
            <div class="row team-cover">
                <div class="col-6 col-sm-4 team-item">
                    <a href="{{ url('/about') }}" class="team-img">
                        <img src="{{ asset('assets/frontend/img/team-1.jpg') }}" alt="team">
                    </a>
                    <h4 class="title"><a href="{{ url('/about') }}">Anthony Watson</a></h4>
                    <div class="prof">CEO, Infodex</div>
                    <ul class="soc-link">
                        <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.behance.net/rovadex"><i class="fab fa-behance"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 team-item">
                    <a href="{{ url('/about') }}" class="team-img">
                        <img src="{{ asset('assets/frontend/img/team-2.jpg') }}" alt="team">
                    </a>
                    <h4 class="title"><a href="{{ url('/about') }}">Marybeth Hoover</a></h4>
                    <div class="prof">CEO, IT Metrix</div>
                    <ul class="soc-link">
                        <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.behance.net/rovadex"><i class="fab fa-behance"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 team-item">
                    <a href="{{ url('/about') }}" class="team-img">
                        <img src="{{ asset('assets/frontend/img/team-3.jpg') }}" alt="team">
                    </a>
                    <h4 class="title"><a href="{{ url('/about') }}">Stewart Collins</a></h4>
                    <div class="prof">CEO, IT Metrix</div>
                    <ul class="soc-link">
                        <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://www.behance.net/rovadex"><i class="fab fa-behance"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 team-item">
                    <a href="{{ url('/about') }}" class="team-img">
                        <img src="{{ asset('assets/frontend/img/team-4.jpg') }}" alt="team">
                    </a>
                    <h4 class="title"><a href="{{ url('/about') }}">Anthony Watson</a></h4>
                    <div class="prof">CEO, Infodex</div>
                    <ul class="soc-link">
                        <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://www.behance.net/rovadex"><i class="fab fa-behance"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 team-item">
                    <a href="{{ url('/about') }}" class="team-img">
                        <img src="{{ asset('assets/frontend/img/team-5.jpg') }}" alt="team">
                    </a>
                    <h4 class="title"><a href="{{ url('/about') }}">Marybeth Hoover</a></h4>
                    <div class="prof">CEO, IT Metrix</div>
                    <ul class="soc-link">
                        <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://www.behance.net/rovadex"><i class="fab fa-behance"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-6 col-sm-4 team-item">
                    <a href="{{ url('/about') }}" class="team-img">
                        <img src="{{ asset('assets/frontend/img/team-6.jpg') }}" alt="team">
                    </a>
                    <h4 class="title"><a href="{{ url('/about') }}">Stewart Collins</a></h4>
                    <div class="prof">CEO, IT Metrix</div>
                    <ul class="soc-link">
                        <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="_blank" href="https://www.behance.net/rovadex"><i class="fab fa-behance"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.linkedin.com/company/rovadex-com"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--================= S-OUR-TEAM END =================-->

    <!--==================== S-COUNTER ====================-->
    <section class="s-counter counter-animate counter-active s-bg">
        <div class="mask" style="background-image: url(assets/frontend/img/bg-effect-counter.svg);"></div>
        <div class="container">
            <div class="row counter-cover">
                <div class="col-6 col-sm-3 counter-item">
                    <div class="counter-number"><span data-number="28">0</span></div>
                    <h5>speakers</h5>
                </div>
                <div class="col-6 col-sm-3 counter-item">
                    <div class="counter-number"><span data-number="3">0</span>k</div>
                    <h5>happy customers</h5>
                </div>
                <div class="col-6 col-sm-3 counter-item">
                    <div class="counter-number"><span data-number="650">0</span></div>
                    <h5>Places</h5>
                </div>
                <div class="col-6 col-sm-3 counter-item">
                    <div class="counter-number"><span data-number="350">0</span></div>
                    <h5>Podcasts</h5>
                </div>
            </div>
        </div>
    </section>
    <!--================== S-COUNTER END ==================-->

    <!--================== JOIN-OUR-TEAM ==================-->
    <section class="join-our-team s-title-bg">
        <span class="title-bg-left">Join Our Team</span>
        <div class="container">
            <h2 class="title-line">Join Our Team</h2>
            <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore.</p>
            <div class="row join-our-team-cover">
                <div class="col-12 col-sm-6 col-md-4 join-our-team-col">
                    <div class="join-our-team-item">
                        <h4><a href="{{ url('/contact') }}">Customer Assistant</a></h4>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Washington</span>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>Fulltime</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 join-our-team-col">
                    <div class="join-our-team-item">
                        <h4><a href="{{ url('/contact') }}">SMM Manager</a></h4>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Washington</span>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>Fulltime</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 join-our-team-col">
                    <div class="join-our-team-item">
                        <h4><a href="{{ url('/contact') }}">C# Developer</a></h4>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Washington</span>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>Fulltime</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 join-our-team-col">
                    <div class="join-our-team-item">
                        <h4><a href="{{ url('/contact') }}">UI/UX Designer</a></h4>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Washington</span>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>Fulltime</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 join-our-team-col">
                    <div class="join-our-team-item">
                        <h4><a href="{{ url('/contact') }}">Software Developer</a></h4>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Washington</span>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>Fulltime</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 join-our-team-col">
                    <div class="join-our-team-item">
                        <h4><a href="{{ url('/contact') }}">Software Engineer</a></h4>
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <span>Washington</span>
                            </li>
                            <li>
                                <i class="fas fa-calendar-alt"></i>
                                <span>Fulltime</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ JOIN-OUR-TEAM END ================-->

@endsection
