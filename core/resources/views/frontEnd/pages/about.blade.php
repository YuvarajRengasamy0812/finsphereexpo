@extends('frontEnd.layouts.master')

@section('title', 'About Us - FinSphere Expo Kuwait')

@section('content')


    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">About FINSPHERE EXPO </h1>
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
                            <!-- <h5>Experience Since 2012</h5> -->
                            <p>FINSPHERE EXPO is a premier international platform dedicated to accelerating financial
                                innovation and fostering global collaboration across the financial ecosystem. Built around
                                the rapidly evolving worlds of fintech, trading, blockchain, artificial intelligence, and
                                digital assets, FINSPHERE EXPO brings together industry leaders, innovators, investors,
                                regulators, and entrepreneurs under one roof</p>
                            <p>The expo serves as a dynamic meeting point where ideas transform into action, emerging
                                technologies gain real-world exposure, and strategic partnerships are forged. Through
                                keynote sessions, expert panels, live demonstrations, workshops, and networking forums,
                                FINSPHERE EXPO delivers a future-focused experience designed to shape the next era of
                                finance</p>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-6 overview-img-cover">
                    <div class="overview-img-cover">
                        <div class="overview-img">
                            <img src="{{ asset('assets/frontend/img/banner/overview-1.jpg') }}" alt="img">
                            <img src="{{ asset('assets/frontend/img/banner/overview-2.jpg') }}" alt="img">
                        </div>
                        <div class="overview-img">
                            <img src="{{ asset('assets/frontend/img/banner/overview-3.jpg') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================== OVERVIEW END ==================-->
    <!--================= OUR-HISTORY END =================-->
    <section class="our-history s-title-bg">
        <span class="title-bg">Our Mission</span>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="our-history-left">
                        <h2 class="title-line-left">Vision & Mission</h2>
                        <div class="overview-info-item">
                            <h5>Vision :</h5>
                            <p>To position Kuwait as a leading regional hub for financial innovation, digital
                                transformation, and trading excellence, connecting the Middle East to the global financial
                                future. FINSPHERE EXPO envisions a thriving financial ecosystem where technology,
                                innovation, and talent converge, creating opportunities for growth, collaboration, and
                                sustainable economic development.</p>

                        </div>
                        <div class="overview-info-item">
                            <h5>Mission :</h5>
                            <p>Our mission is to educate, connect, and empower the global financial community by delivering
                                immersive experiences, thought leadership, and high-impact networking opportunities.
                                FINSPHERE EXPO aims to bridge the gap between traditional finance and emerging technologies
                                while enabling collaboration between global innovators and regional markets..</p>
                            <p>Showcasing breakthrough financial technologies and solutions that shape the future of the
                                industry.Creating an inclusive platform for dialogue between startups, corporates,
                                governments, and academia</p>
                            <p>Through knowledge-sharing, innovation showcases, and strategic dialogue, FINSPHERE EXPO
                                supports sustainable growth, financial inclusion, and technological advancement across the
                                financial sector</p>
                        </div>
                        <div class="history-cert">
                            <div class="history-cert-img">
                                <a href="{{ asset('assets/frontend/img/choose-1.jpg') }}" data-fancybox="gallery2">
                                    <img src="{{ asset('assets/frontend/img/choose-1.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="history-cert-img">
                                <a href="{{ asset('assets/frontend/img/curses-1.jpg') }}" data-fancybox="gallery2">
                                    <img src="{{ asset('assets/frontend/img/curses-1.jpg') }}" alt="img">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="history-info-cover">
                        <div class="history-info">
                            <h4 class="title"><span>◇</span> Our Establishment</h4>
                            <p>FINSPHERE EXPO was established to serve as a global platform for financial innovation,
                                collaboration, and thought leadership. Founded by industry experts, the expo was created to
                                connect emerging technologies with real-world financial applications, empowering
                                stakeholders across fintech, trading, blockchain, and digital assets. Rooted in Kuwait and
                                driven by a global outlook, FINSPHERE EXPO represents a new era of financial engagement and
                                opportunity</p>
                        </div>
                        <div class="history-info">
                            <h4 class="title"><span>◇ </span>The Early Days</h4>
                            <p>FINSPHERE EXPO began as a vision to unite financial innovation, education, and collaboration.
                                In its early days, careful planning and engagement with industry experts laid the foundation
                                for a platform designed to drive growth, connect global stakeholders, and shape the future
                                of finance.</p>
                        </div>
                        <div class="history-info">
                            <h4 class="title"><span>◇</span>Prosperity of Company</h4>
                            <p>Since its inception, FINSPHERE EXPO has grown steadily, earning recognition as a leading
                                platform for financial innovation and global collaboration. Its success is built on strong
                                partnerships, visionary leadership, and a commitment to connecting ideas, technology, and
                                people shaping the future of finance.</p>
                        </div>
                        <div class="history-info">
                            <h4 class="title"><span>◇ </span>Worldwide Recognition</h4>
                            <p>FINSPHERE EXPO has gained international acclaim, attracting global experts, innovators, and
                                investors, and establishing itself as a premier platform for financial innovation and
                                collaboration..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= OUR-HISTORY END =================-->

    <!--=================== S-OUR-TEAM ===================-->
    <!-- <section class="s-our-team about-team">
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
                    </section> -->
    <!--================= S-OUR-TEAM END =================-->

    <!--================ S-UPCOMING-COURSE ================-->
    <section class="s-upcoming-course s-title-bg">
        <span class="title-bg-left"> Why Kuwait</span>
        <div class="container">
            <h2 class="title-line"> Why Kuwait</h2>

            <div class="upcoming-course-cover">
                <div class="course-item-left">
                    <div class="upcoming-course-item">
                        <div class="date-cover">
                            <div class="day">5</div>
                            <div class="date-info">
                                <div class="month">To 6 may 2026</div>
                                <div class="name">Kuwait - Al Badriya Ballroom</div>
                            </div>
                        </div>
                        <!-- <h3 class="title"><a href="{{ url('/events') }}">Information Technology in The Banking
                                                Sector</a></h3> -->
                        <p>
                            Kuwait stands at the crossroads of financial growth and technological transformation in the
                            Middle East. <b>FINSPHERE EXPO KUWAIT</b> aims to unlock this potential by introducing a
                            world-class platform for innovation, learning, and collaboration within the financial
                            ecosystem..</p>
                        <div class="upcoming-course-adr mt-4">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Venue: TBD <span>|</span>Kuwait</p>
                        </div>
                        <a href="{{ url('/contact') }}" class="btn">Register</a>
                    </div>
                </div>
                <div class="upcoming-course-img">
                    <img src="{{ asset('assets/frontend/img/banner/curses-1.jpg') }}" alt="img">
                </div>
            </div>
        </div>
    </section>
    <!--============== S-UPCOMING-COURSE END ==============-->

   {{-- Counter --}}
   @include('frontEnd.includes.counter')

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
            <p class="slogan">Our attendees and partners consistently praise FINSPHERE EXPO for its innovation, networking
                opportunities, and impact on the global financial community.</p>
            <div class="slider-testimonials">
                <div class="slide-testimonial">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials-1.jpg') }}" alt="img">
                        <span class="slide-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                        <div class="testimon-content">FINSPHERE EXPO is unlike any other platform I’ve attended. It brings
                            together visionaries, innovators, and investors in a way that sparks real collaboration. The
                            insights I gained here have transformed how we approach fintech solutions in our company.</div>
                        <h4 class="name">Sarah Al-Mutairi</h4>
                        <div class="prof">Fintech Innovator</div>
                    </div>
                </div>
                <div class="slide-testimonial">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials-2.jpg') }}" alt="img">
                        <span class="slide-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                        <div class="testimon-content">Attending FINSPHERE EXPO gave me a unique perspective on global
                            financial trends and emerging technologies. The networking opportunities are unmatched, and the
                            quality of discussions has been incredibly valuable for shaping our investment strategies!
                        </div>
                        <h4 class="name">Ahmed Khan</h4>
                        <div class="prof">Investment Strategist</div>
                    </div>
                </div>
                <div class="slide-testimonial">
                    <div class="testimonial-item">
                        <img src="{{ asset('assets/frontend/img/testimonials-3.jpg') }}" alt="img">
                        <span class="slide-quote"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                        <div class="testimon-content">FINSPHERE EXPO has been a game-changer for our business. The platform
                            connects us directly with industry leaders and potential partners, providing both exposure and
                            actionable insights. It’s more than an event-it’s a hub for innovation and growth.</div>
                        <h4 class="name">Lina Farouk</h4>
                        <div class="prof">Blockchain Entrepreneur</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=============== S-TESTIMONIALS END ===============-->

@endsection
