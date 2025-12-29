@extends('frontEnd.layouts.master')

@section('title', 'FinSphere Expo Kuwait')

@section('content')

    <!--====================== MAIN ======================-->
    <section class="main">
        <div class="main-slider">
            <div class="main-slide">
                <img class="effect-slide" src="{{ asset('assets/frontend/img/effect-slide.svg') }}" alt="effect">
                <div class="container">
                    <div class="row main-slider-cover">
                        <div class="col-12 col-sm-6 img-slide"><img src="{{ asset('assets/frontend/img/img-slide-2.jpg') }}"
                                alt="img"></div>
                        <div class="col-12 col-sm-6 info-slide">
                            <div class="slide-category">Conference</div>
                            <h3 class="title">Professional Business Education</h3>
                            <a href="{{ url('/events') }}" class="btn">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-slide">
                <img class="effect-slide" src="{{ asset('assets/frontend/img/effect-slide.svg') }}" alt="effect">
                <div class="container">
                    <div class="row main-slider-cover">
                        <div class="col-12 col-sm-6 img-slide"><img src="{{ asset('assets/frontend/img/img-slide-3.jpg') }}"
                                alt="img"></div>
                        <div class="col-12 col-sm-6 info-slide">
                            <div class="slide-category">Conference</div>
                            <h3 class="title">Information Technology in The Banking Sector</h3>
                            <a href="{{ url('/events') }}" class="btn">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-slide">
                <img class="effect-slide" src="{{ asset('assets/frontend/img/effect-slide.svg') }}" alt="effect">
                <div class="container">
                    <div class="row main-slider-cover">
                        <div class="col-12 col-sm-6 img-slide"><img src="{{ asset('assets/frontend/img/img-slide-1.jpg') }}"
                                alt="img"></div>
                        <div class="col-12 col-sm-6 info-slide">
                            <div class="slide-category">Conference</div>
                            <h3 class="title">Ultimate Skills For an Start in IT Recruiting</h3>
                            <a href="{{ url('/events') }}" class="btn">learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==================== MAIN END ====================-->

    <!--================== EVENT BLOCK ==================-->
    <section class="s-event-block" style="background-image: url('assets/frontend/img/bg-team-about.svg');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 event-item-cover">
                    <div class="event-block-item">
                        <div class="event-img">
                            <img src="{{ asset('assets/frontend/img/event-icon-1.svg') }}" alt="icon">
                        </div>
                        <h4 class="title-line">Business Coaching</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="{{ url('/events') }}" class="event-btn">read more</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 event-item-cover">
                    <div class="event-block-item">
                        <div class="event-img">
                            <img src="{{ asset('assets/frontend/img/event-icon-2.svg') }}" alt="icon">
                        </div>
                        <h4 class="title-line">Online Courses</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="{{ url('/events') }}" class="event-btn">read more</a>
                    </div>
                </div>
                <div class="col-12 col-md-4 event-item-cover">
                    <div class="event-block-item">
                        <div class="event-img">
                            <img src="{{ asset('assets/frontend/img/event-icon-3.svg') }}" alt="icon">
                        </div>
                        <h4 class="title-line">Conferences</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                        <a href="{{ url('/events') }}" class="event-btn">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ EVENT BLOCK END ================-->

    <!--==================== S-ABOUT ====================-->
    <section class="s-about s-title-bg">
        <span class="title-bg-left">About Us</span>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 about-info">
                    <h2 class="title-line-left">About Us</h2>
                    <div class="about-slogan">Exchange of experience, live cases and ideas from leading industry
                        representatives.</div>
                    <div class="about-info-text">
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint <a href="{{ url('#') }}">occaecat cupidatat</a> non proident,
                            sunt
                            in culpa qui</p>
                        <p>Mus mauris vitae ultricies leo integer malesuada nunc vel. Eget aliquet nibh praesent tristique
                            magna sit amet purus.</p>
                    </div>
                    <ul class="about-cont-list">
                        <li><a href="tel:18004886040"><i class="fas fa-phone"></i>1-800-488-6040</a></li>
                        <li><a href="mailto:dronebay@gmail.com"><i class="fas fa-envelope"></i>dronebay@gmail.com</a></li>
                    </ul>
                    <ul class="soc-link">
                        <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li><a target="_blank" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
                        <li><a target="_blank" href="https://vimeo.com/"><i class="fab fa-vimeo"></i></a></li>
                    </ul>
                </div>
                <div class="col-5 about-img">
                    <img src="{{ asset('assets/frontend/img/about-1.jpg') }}" alt="img">
                </div>
            </div>
            <!--============= ABOUT-BLOCK-STAGES =============-->
            <div class="about-block-stages">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="about-stage">
                            <div class="number">01</div>
                            <div class="about-stage-text">Help to Professionals of Different Levels</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="about-stage">
                            <div class="number">02</div>
                            <div class="about-stage-text">Development of System Skills</div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="about-stage">
                            <div class="number">03</div>
                            <div class="about-stage-text">Wonderful Team for Your Development</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--=========== ABOUT-BLOCK-STAGES END ===========-->
        </div>
    </section>
    <!--================== S-ABOUTK END ==================-->

    <!--=================== S-OUR-TEAM ===================-->
    <section class="s-our-team home-our-team">
        <div class="our-team-bg" style="background-image: url('assets/frontend/img/effect-team-1.png);"></div>
        <div class="container">
            <h2 class="title-line">Our Team</h2>
            <p class="slogan">They possess the secret knowledge and interesting experience of creating a digital product.
            </p>
            <div class="row team-cover">
                <div class="col-12 col-sm-4 team-item">
                    <a href="{{ url('/about') }}" class="team-img">
                        <img src="{{ asset('assets/frontend/img/team-1.jpg') }}" alt="team">
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
                <div class="col-12 col-sm-4 team-item">
                    <a href="{{ url('/about') }}" class="team-img">
                        <img src="{{ asset('assets/frontend/img/team-2.jpg') }}" alt="team">
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
                <div class="col-12 col-sm-4 team-item">
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
            </div>
            <a href="{{ url('/about') }}" class="btn">view all team</a>
        </div>
    </section>
    <!--================= S-OUR-TEAM END =================-->

    <!--================== S-OUR-COURSES ==================-->
    <section class="s-our-courses s-title-bg">
        <span class="title-bg">Our Courses</span>
        <div class="container">
            <h2 class="title-line">Our Courses</h2>
            <p class="slogan">They possess the secret knowledge and interesting experience of creating a digital product.
            </p>
            <div class="row courses-cover">
                <div class="col-12 col-sm-6 course-item-cover">
                    <div class="course-item">
                        <div class="course-left">
                            <h4 class="title"><a href="{{ url('/events') }}">Economic Development</a></h4>
                            <div class="date"><i class="fas fa-calendar-alt"></i><a href="{{ url('#') }}">June
                                    11, 2019</a></div>
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
                            <div class="date"><i class="fas fa-calendar-alt"></i><a href="{{ url('#') }}">July
                                    18, 2019</a></div>
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
                            <div class="date"><i class="fas fa-calendar-alt"></i><a href="{{ url('#') }}">July
                                    18, 2019</a></div>
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
                                    11, 2019</a></div>
                        </div>
                        <div class="course-right">
                            <div class="price"><span>$200</span>/month</div>
                            <a href="{{ url('/events') }}" class="btn">buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 course-item-cover">
                    <div class="course-item">
                        <div class="course-left">
                            <h4 class="title"><a href="{{ url('/events') }}">Normal distribution of letters</a></h4>
                            <div class="date"><i class="fas fa-calendar-alt"></i><a href="{{ url('#') }}">August
                                    21, 2019</a></div>
                        </div>
                        <div class="course-right">
                            <div class="price"><span>$200</span>/month</div>
                            <a href="{{ url('/events') }}" class="btn">buy now</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 course-item-cover">
                    <div class="course-item">
                        <div class="course-left">
                            <h4 class="title"><a href="{{ url('/events') }}">Many web page publishing</a></h4>
                            <div class="date"><i class="fas fa-calendar-alt"></i><a href="{{ url('#') }}">August
                                    30, 2019</a></div>
                        </div>
                        <div class="course-right">
                            <div class="price"><span>$220</span>/month</div>
                            <a href="{{ url('/events') }}" class="btn">buy now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-cover">
                <a href="{{ url('/events') }}" class="btn">view more</a>
            </div>
        </div>
    </section>
    <!--================ S-OUR-COURSES END ================-->

    <!--==================== S-COUNTER ====================-->
    <section class="s-counter counter-animate counter-active s-bg">
        <div class="mask" style="background-image: url('assets/frontend/img/bg-effect-counter.svg');"></div>
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

    <!--=================== WHY-CHOOSE ===================-->
    <section class="why-choose">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 why-choose-img">
                    <img src="{{ asset('assets/frontend/img/choose-1.jpg') }}" alt="img">
                </div>
                <div class="col-12 col-md-7 choose-info">
                    <h2 class="title-line-left">Why Choose Us</h2>
                    <!--============ TAB-WRAP ============-->
                    <div class="tab-wrap">
                        <ul class="tab-nav">
                            <li class="item" rel="tab1">Experience</li>
                            <li class="item" rel="tab2">Skills</li>
                            <li class="item" rel="tab3">Mission</li>
                        </ul>
                        <div class="tabs-content">
                            <div class="tab tab1">
                                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia</p>
                                <ul class="choose-list">
                                    <li>
                                        <div class="title">coaching</div>
                                        <div class="choose-progress-wrapper">
                                            <div class="choose-progress-bar" style="width: 80%">
                                                <span class="choose-progress-percentage">80%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">training</div>
                                        <div class="choose-progress-wrapper">
                                            <div class="choose-progress-bar" style="width: 68%">
                                                <span class="choose-progress-percentage">68%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">training</div>
                                        <div class="choose-progress-wrapper">
                                            <div class="choose-progress-bar" style="width: 92%">
                                                <span class="choose-progress-percentage">92%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab tab2">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, placeat ea nostrum.
                                    Aliquam id eligendi asperiores dolores quos nihil delectus quas, eveniet totam ut quidem
                                    perspiciatis temporibus amet, sunt dicta, consectetur hic tempora nisi expedita quisquam
                                    consequatur non vero? Alias dolorum iusto soluta impedit amet voluptatum dolores,
                                    molestias aut eligendi.</p>
                                <ul class="choose-list">
                                    <li>
                                        <div class="title">training</div>
                                        <div class="choose-progress-wrapper">
                                            <div class="choose-progress-bar" style="width: 68%">
                                                <span class="choose-progress-percentage">68%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">coaching</div>
                                        <div class="choose-progress-wrapper">
                                            <div class="choose-progress-bar" style="width: 75%">
                                                <span class="choose-progress-percentage">75%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">training</div>
                                        <div class="choose-progress-wrapper">
                                            <div class="choose-progress-bar" style="width: 92%">
                                                <span class="choose-progress-percentage">92%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab tab3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum, placeat ea nostrum.
                                    Aliquam id eligendi asperiores dolores quos nihil delectus quas, eveniet totam ut quidem
                                    perspiciatis temporibus amet, sunt dicta.</p>
                                <ul class="choose-list">
                                    <li>
                                        <div class="title">training</div>
                                        <div class="choose-progress-wrapper">
                                            <div class="choose-progress-bar" style="width: 80%">
                                                <span class="choose-progress-percentage">80%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">coaching</div>
                                        <div class="choose-progress-wrapper">
                                            <div class="choose-progress-bar" style="width: 75%">
                                                <span class="choose-progress-percentage">75%</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="title">training</div>
                                        <div class="choose-progress-wrapper">
                                            <div class="choose-progress-bar" style="width: 92%">
                                                <span class="choose-progress-percentage">92%</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= WHY-CHOOSE END =================-->

    <!--================= S-TESTIMONIALS =================-->
    <section class="s-testimonials testimonials-slider-cover s-title-bg">
        <span class="title-bg">Testimonials</span>
        <div class="container">
            <h2 class="title-line">Testimonials</h2>
            <p class="slogan">They possess the secret knowledge and interesting experience of creating a digital product.
            </p>
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
                        <div class="testimon-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo
                            mollitia vitae architecto fuga molestias ad voluptates beatae error doloribus reprehenderit.
                        </div>
                        <h4 class="name">Samson Peters</h4>
                        <div class="prof">Regular Client</div>
                    </div>
                </div>
                <div class="slide-testimonial">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials-3.jpg') }}" alt="img">
                        <span class="slide-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                        <div class="testimon-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi atque
                            inventore pariatur itaque, maxime voluptatibus iusto quam hic beatae labore.</div>
                        <h4 class="name">Marry James</h4>
                        <div class="prof">Regular Client</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============== S-TESTIMONIALS END ===============-->

    <!--==================== S-PARTNERS ====================-->
    <section class="s-partners s-bg">
        <div class="mask" style="background-image: url('assets/frontend/img/bg-effect-partners.svg');"></div>
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-4 col-lg-2"><img src="{{ asset('assets/frontend/img/partner-1.png') }}"
                        alt="img"></div>
                <div class="col-6 col-sm-4 col-lg-2"><img src="{{ asset('assets/frontend/img/partner-2.png') }}"
                        alt="img"></div>
                <div class="col-6 col-sm-4 col-lg-2"><img src="{{ asset('assets/frontend/img/partner-3.png') }}"
                        alt="img"></div>
                <div class="col-6 col-sm-4 col-lg-2"><img src="{{ asset('assets/frontend/img/partner-4.png') }}"
                        alt="img"></div>
                <div class="col-6 col-sm-4 col-lg-2"><img src="{{ asset('assets/frontend/img/partner-5.png') }}"
                        alt="img"></div>
                <div class="col-6 col-sm-4 col-lg-2"><img src="{{ asset('assets/frontend/img/partner-6.png') }}"
                        alt="img"></div>
            </div>
        </div>
    </section>
    <!--================== S-PARTNERS END ==================-->

    <!--==================== S-GALLERY ====================-->
    <section class="s-gallery">
        <div class="container">
            <h2 class="title-line">Our Gallery</h2>
            <div class="row-gallery">
                <div class="gallery-cover">
                    <div class="gallery-item">
                        <a href="{{ asset('assets/frontend/img/gal-1.jpg') }}" data-fancybox="gallery1">
                            <div class="gal-open"><span>+</span></div>
                            <img src="{{ asset('assets/frontend/img/gal-1.jpg') }}" alt="img">
                            <div class="gal-item">
                                <h4 class="title">Image #1</h4>
                                <p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('assets/frontend/img/gal-2.jpg') }}" data-fancybox="gallery1">
                            <div class="gal-open"><span>+</span></div>
                            <img src="{{ asset('assets/frontend/img/gal-2.jpg') }}" alt="img">
                            <div class="gal-item">
                                <h4 class="title">Image #2</h4>
                                <p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('assets/frontend/img/gal-3.jpg') }}" data-fancybox="gallery1">
                            <div class="gal-open"><span>+</span></div>
                            <img src="{{ asset('assets/frontend/img/gal-3.jpg') }}" alt="img">
                            <div class="gal-item">
                                <h4 class="title">Image #3</h4>
                                <p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('assets/frontend/img/gal-6.jpg') }}" data-fancybox="gallery1">
                            <div class="gal-open"><span>+</span></div>
                            <img src="{{ asset('assets/frontend/img/gal-6.jpg') }}" alt="img">
                            <div class="gal-item">
                                <h4 class="title">Image #6</h4>
                                <p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('assets/frontend/img/gal-4.jpg') }}" data-fancybox="gallery1">
                            <div class="gal-open"><span>+</span></div>
                            <img src="{{ asset('assets/frontend/img/gal-4.jpg') }}" alt="img">
                            <div class="gal-item">
                                <h4 class="title">Image #4</h4>
                                <p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
                            </div>
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="{{ asset('assets/frontend/img/gal-5.jpg') }}" data-fancybox="gallery1">
                            <div class="gal-open"><span>+</span></div>
                            <img src="{{ asset('assets/frontend/img/gal-5.jpg') }}" alt="img">
                            <div class="gal-item">
                                <h4 class="title">Image #5</h4>
                                <p>Ut enim ad minim veniam. Elementum nibh tellus molestie.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn-cover">
                <a href="{{ url('/gallery') }}" class="btn">view all gallery</a>
            </div>
        </div>
    </section>
    <!--================== S-GALLERY END ==================-->

    <!--=================== S-CONTACTS ===================-->
    <section class="s-contacts">
        <div class="container">
            <div class="contacts-cover">
                <h2 class="title-line-left">Contact Us</h2>
                <form id='contactform' class="form-block" action="php/contact.php" name="contactform">
                    <ul class="form-cover">
                        <li class="inp-name"><input id="name" type="text" name="your-name" placeholder="Name">
                        </li>
                        <li class="inp-email"><input id="email" type="email" name="your-email"
                                placeholder="E-mail"></li>
                        <li class="inp-text">
                            <textarea id="comments" name="your-text" placeholder="Message"></textarea>
                        </li>
                    </ul>
                    <div class="checkbox-wrap">
                        <div class="checkbox-cover">
                            <input type="checkbox">
                            <p>By using this form you agree with the storage and handling of your data by this website.</p>
                        </div>
                    </div>
                    <div class="btn-form-cover">
                        <button id="#submit" type="submit" class="btn">submit</button>
                    </div>
                    <div id="message"></div>
                </form>
            </div>
        </div>
        <div id="map" class="cont-map google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d890603.0792594348!2d47.68021995!3d29.31407275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fc5363fbeea51a1%3A0x74726bcd92d8edd2!2sKuwait!5e0!3m2!1sen!2sae!4v1764753612028!5m2!1sen!2sae"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <!--================= S-CONTACTS END =================-->

@endsection
