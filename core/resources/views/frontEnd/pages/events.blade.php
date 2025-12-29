@extends('frontEnd.layouts.master')

@section('title', 'Events - FinSphere Expo Kuwait')

@section('content')

    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">Courses & Events</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Courses & Events</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--============= S-PROFESSIONAL-TRAINING =============-->
    <section class="s-professional-training">
        <div class="container">
            <h2 class="title-line">Professional Training</h2>
            <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                ut labore.</p>
            <div class="upcoming-course-wrap">
                <div class="upcoming-course-cover">
                    <div class="course-item-left">
                        <div class="upcoming-course-item">
                            <div class="date-cover">
                                <div class="day">13</div>
                                <div class="date-info">
                                    <div class="month">november, 2018</div>
                                    <div class="name">The Plaza Center</div>
                                </div>
                            </div>
                            <h3 class="title"><a href="{{ url('/events') }}">Information Technology in The Banking
                                    Sector</a>
                            </h3>
                            <div class="upcoming-course-adr">
                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                <p>768 Fifth Avenue New York, <br>NY 10019 <span>|</span> The Plaza Center</p>
                            </div>
                            <a href="single-events.html" class="btn">register</a>
                        </div>
                    </div>
                    <div class="upcoming-course-img">
                        <img src="{{ asset('assets/frontend/img/curses-1.jpg') }}" alt="img">
                    </div>
                </div>
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
                            <h3 class="title"><a href="{{ url('/events') }}">Ultimate Skills For an Explosive Start in IT
                                    Recruiting</a></h3>
                            <div class="upcoming-course-adr">
                                <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                <p>768 Fifth Avenue New York, <br>NY 10019 <span>|</span> The Plaza Center</p>
                            </div>
                            <a href="single-events.html" class="btn">register</a>
                        </div>
                    </div>
                    <div class="upcoming-course-img">
                        <img src="{{ asset('assets/frontend/img/curses-2.jpg') }}" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=========== S-PROFESSIONAL-TRAINING END ===========-->

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

    <!--================== S-OUR-COURSES ==================-->
    <section class="events-our-courses s-our-courses s-title-bg">
        <span class="title-bg">Our Courses</span>
        <div class="container">
            <h2 class="title-line">Our Courses</h2>
            <p class="slogan">They possess the secret knowledge and interesting experience of creating a digital
                product.</p>
            <div class="row courses-cover">
                <div class="col-12 col-sm-6 course-item-cover">
                    <div class="course-item">
                        <div class="course-left">
                            <h4 class="title"><a href="{{ url('/events') }}">Economic Development</a></h4>
                            <div class="date"><i class="fas fa-calendar-alt"></i><a href="{{ url('#') }}">June 11,
                                    2019</a></div>
                        </div>
                        <div class="course-right">
                            <div class="price"><span>$220</span>/month</div>
                            <a href="{{ url('/events') }}" class="btn">buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 course-item-cover">
                    <div class="course-item">
                        <div class="course-left">
                            <h4 class="title"><a href="{{ url('/events') }}">Reader will be distracted</a></h4>
                            <div class="date"><i class="fas fa-calendar-alt"></i><a href="{{ url('#') }}">July 18,
                                    2019</a></div>
                        </div>
                        <div class="course-right">
                            <div class="price"><span>$220</span>/month</div>
                            <a href="{{ url('/events') }}" class="btn">buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 course-item-cover">
                    <div class="course-item">
                        <div class="course-left">
                            <h4 class="title"><a href="{{ url('/events') }}">By the readable content</a></h4>
                            <div class="date"><i class="fas fa-calendar-alt"></i><a href="{{ url('#') }}">July 18,
                                    2019</a></div>
                        </div>
                        <div class="course-right">
                            <div class="price"><span>$220</span>/month</div>
                            <a href="{{ url('/events') }}" class="btn">buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 course-item-cover">
                    <div class="course-item">
                        <div class="course-left">
                            <h4 class="title"><a href="{{ url('/events') }}">The point of using Lorem Ipsum</a></h4>
                            <div class="date"><i class="fas fa-calendar-alt"></i><a href="{{ url('#') }}">August
                                    11,
                                    2019</a></div>
                        </div>
                        <div class="course-right">
                            <div class="price"><span>$200</span>/month</div>
                            <a href="{{ url('/events') }}" class="btn">buy now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ S-OUR-COURSES END ================-->

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
                        <div class="testimon-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos
                            accusantium eius illo ad voluptatem magnam recusandae debitis error ab ex!</div>
                        <h4 class="name">Samson Peters</h4>
                        <div class="prof">Regular Client</div>
                    </div>
                </div>
                <div class="slide-testimonial">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials-3.jpg') }}" alt="img">
                        <span class="slide-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                        <div class="testimon-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea
                            officia rerum, dolores odio placeat suscipit. Officia inventore doloribus, ipsa dolores!
                        </div>
                        <h4 class="name">Marry James</h4>
                        <div class="prof">Regular Client</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============== S-TESTIMONIALS END ===============-->

@endsection
