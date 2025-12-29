@extends('frontEnd.layouts.master')

@section('title', 'About Us - FinSphere Expo Kuwait')

@section('content')


    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">About Us</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--==================== OVERVIEW ====================-->
    <section class="overview">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="overview-info">
                        <h2 class="title-line-left">Overview</h2>
                        <div class="overview-info-item">
                            <h5>Experience Since 2012</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim
                                ad minim veniam.</p>
                            <p>Elementum nibh tellus molestie nunc non blandit massa enim. Pretium aenean pharetra magna
                                ac placerat vestibulum lectus.</p>
                        </div>
                        <div class="overview-info-item">
                            <h5>Our Mission</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim
                                ad minim veniam. Elementum nibh tellus molestie nunc non blandit massa enim.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 overview-img-cover">
                    <div class="overview-img-cover">
                        <div class="overview-img">
                            <img src="{{ asset('assets/frontend/img/overview-1.jpg') }}" alt="img">
                            <img src="{{ asset('assets/frontend/img/overview-2.jpg') }}" alt="img">
                        </div>
                        <div class="overview-img">
                            <img src="{{ asset('assets/frontend/img/overview-3.jpg') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================== OVERVIEW END ==================-->
    <!--================= OUR-HISTORY END =================-->
    <section class="our-history s-title-bg">
        <span class="title-bg">Our History</span>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="our-history-left">
                        <h2 class="title-line-left">Our History</h2>
                        <div class="overview-info-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim
                                ad minim veniam.</p>
                            <p>Elementum nibh tellus molestie nunc non blandit massa enim. Pretium aenean pharetra magna
                                ac placerat vestibulum lectus.</p>
                        </div>
                        <div class="overview-info-item">
                            <h5>Our Certificates</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim
                                ad minim. </p>
                        </div>
                        <div class="history-cert">
                            <div class="history-cert-img">
                                <a href="{{ asset('assets/frontend/img/certificate-1.jpg') }}" data-fancybox="gallery2">
                                    <img src="{{ asset('assets/frontend/img/certificate-1.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="history-cert-img">
                                <a href="{{ asset('assets/frontend/img/certificate-1.jpg') }}" data-fancybox="gallery2">
                                    <img src="{{ asset('assets/frontend/img/certificate-1.jpg') }}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="history-info-cover">
                        <div class="history-info">
                            <h4 class="title"><span>2012-2014. </span>Our Establishment</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim
                                ad minim veniam. Elementum nibh tellus molestie.</p>
                        </div>
                        <div class="history-info">
                            <h4 class="title"><span>2014. </span>The Early Days</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim
                                ad minim veniam.</p>
                        </div>
                        <div class="history-info">
                            <h4 class="title"><span>2015-2016. </span>Prosperity of Company</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim
                                ad minim veniam.</p>
                        </div>
                        <div class="history-info">
                            <h4 class="title"><span>2017-2018. </span>Worldwide Recognition</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod aliqua. Ut enim
                                ad minim veniam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= OUR-HISTORY END =================-->

    <!--=================== S-OUR-TEAM ===================-->
    <section class="s-our-team about-team">
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
                        <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
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

    <!--================ S-UPCOMING-COURSE ================-->
    <section class="s-upcoming-course s-title-bg">
        <span class="title-bg-left">Upcoming Course</span>
        <div class="container">
            <h2 class="title-line">Upcoming Course</h2>
            <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore.</p>
            <div class="upcoming-course-cover">
                <div class="course-item-left">
                    <div class="upcoming-course-item">
                        <div class="date-cover">
                            <div class="day">12</div>
                            <div class="date-info">
                                <div class="month">november, 2018</div>
                                <div class="name">The Plaza Center</div>
                            </div>
                        </div>
                        <h3 class="title"><a href="{{ url('/events') }}">Information Technology in The Banking
                                Sector</a></h3>
                        <div class="upcoming-course-adr">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>768 Fifth Avenue New York, <br>NY 10019 <span>|</span> The Plaza Center</p>
                        </div>
                        <a href="single-events.html" class="btn">register</a>
                    </div>
                </div>
                <div class="upcoming-course-img">
                    <img src="{{ asset('assets/frontend/img/curses-1.jpg') }}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--============== S-UPCOMING-COURSE END ==============-->

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

    <!--================= S-TESTIMONIALS =================-->
    <section class="s-testimonials about-testimonials-slider">
        <ul class="about-testimonials about-testimon-left">
            <li><img src="{{ asset('assets/frontend/img/testim-left-1.png') }}" alt="img"></li>
            <li><img src="{{ asset('assets/frontend/img/testim-left-2.png') }}" alt="img"></li>
            <li><img src="{{ asset('assets/frontend/img/testim-left-3.png') }}" alt="img"></li>
            <li><img src="{{ asset('assets/frontend/img/testim-left-4.png') }}" alt="img"></li>
            <li><img src="{{ asset('assets/frontend/img/testim-left-5.png') }}" alt="img"></li>
        </ul>
        <ul class="about-testimonials about-testimon-right">
            <li><img src="{{ asset('assets/frontend/img/testim-right-1.png') }}" alt="img"></li>
            <li><img src="{{ asset('assets/frontend/img/testim-right-2.png') }}" alt="img"></li>
            <li><img src="{{ asset('assets/frontend/img/testim-right-3.png') }}" alt="img"></li>
            <li><img src="{{ asset('assets/frontend/img/testim-right-4.png') }}" alt="img"></li>
            <li><img src="{{ asset('assets/frontend/img/testim-right-5.png') }}" alt="img"></li>
        </ul>
        <div class="container">
            <h2 class="title-line">What People Say About Us</h2>
            <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore.</p>
            <div class="slider-testimonials">
                <div class="slide-testimonial">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials-1.jpg') }}" alt="img">
                        <span class="slide-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                        <div class="testimon-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod aliqua. Ut enim ad minim veniam. Elementum nibh tellus molestie nunc non</div>
                        <h4 class="name">Louisa Russell</h4>
                        <div class="prof">Regular Client</div>
                    </div>
                </div>
                <div class="slide-testimonial">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials-2.jpg') }}" alt="img">
                        <span class="slide-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                        <div class="testimon-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Molestiae veritatis odio autem explicabo dicta voluptatum nulla qui, ipsam cupiditate neque!
                        </div>
                        <h4 class="name">Samson Peters</h4>
                        <div class="prof">Regular Client</div>
                    </div>
                </div>
                <div class="slide-testimonial">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials-3.jpg') }}" alt="img">
                        <span class="slide-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                        <div class="testimon-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A
                            similique delectus possimus consequuntur quia vel neque animi eveniet voluptatum hic.</div>
                        <h4 class="name">Marry James</h4>
                        <div class="prof">Regular Client</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============== S-TESTIMONIALS END ===============-->

@endsection
