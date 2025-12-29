@extends('frontEnd.layouts.master')

@section('title', 'News - FinSphere Expo Kuwait')

@section('content')

    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">News</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>News</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--===================== S-NEWS =====================-->
    <section class="s-news">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="post-header">
                            <h3 class="title title-line-left"><a href="{{ url('/single-news') }}">Creating a Wordpress Blog
                                    for
                                    Beginners</a></h3>
                            <div class="post-thumbnail">
                                <a href="{{ url('/single-news') }}">
                                    <img src="{{ asset('assets/frontend/img/news-1.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="meta">
                                <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i>By <a
                                        href="{{ url('#') }}">Samson peters</a></span>
                                <span class="post-date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><a
                                        href="{{ url('#') }}">Dec 26, 2019</a></span>
                                <span class="post-category"><i class="fas fa-tag" aria-hidden="true"></i><a
                                        href="{{ url('#') }}">Coaching</a></span>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="text">
                                <p>Ultricies tristique nulla aliquet enim tortor. Arcu bibendum at varius vel pharetra
                                    vel turpis nunc eget. Et leo duis ut diam quam nulla. Cras pulvinar mattis nunc sed
                                    blandit libero volutpat. Blandit volutpat maecenas volutpat blandit aliquam etiam
                                    erat velit. </p>
                            </div>
                        </div>
                    </div>
                    <div class="post-item-cover">
                        <div class="post-header">
                            <h3 class="title title-line-left"><a href="{{ url('/single-news') }}">Data Analysis with Pandas
                                    and
                                    Python</a></h3>
                            <div class="post-thumbnail">
                                <a href="{{ url('/single-news') }}">
                                    <img src="{{ asset('assets/frontend/img/news-2.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="meta">
                                <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i>By <a
                                        href="{{ url('#') }}">Samson peters</a></span>
                                <span class="post-date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><a
                                        href="{{ url('#') }}">Feb 26, 2019</a></span>
                                <span class="post-category"><i class="fas fa-tag" aria-hidden="true"></i><a
                                        href="{{ url('#') }}">Coaching</a></span>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="text">
                                <p>Ultricies tristique nulla aliquet enim tortor. Arcu bibendum at varius vel pharetra
                                    vel turpis nunc eget. Et leo duis ut diam quam nulla. Cras pulvinar mattis nunc sed
                                    blandit libero volutpat. Blandit volutpat maecenas volutpat blandit aliquam etiam
                                    erat velit. </p>
                            </div>
                        </div>
                    </div>
                    <div class="post-item-cover">
                        <blockquote>
                            <p>“At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque corrupti quos dolores et quas molestias”</p>
                            <cite>by <a href="{{ url('#') }}">Kerry Ashman</a></cite>
                        </blockquote>
                    </div>
                    <div class="post-item-cover">
                        <div class="post-header">
                            <h3 class="title title-line-left"><a href="{{ url('/single-news') }}">UX & Web Design Master
                                    Course:
                                    Strategy</a></h3>
                            <div class="meta">
                                <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i>By <a
                                        href="{{ url('#') }}">Samson peters</a></span>
                                <span class="post-date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><a
                                        href="{{ url('#') }}">Feb 26, 2019</a></span>
                                <span class="post-category"><i class="fas fa-tag" aria-hidden="true"></i><a
                                        href="{{ url('#') }}">Coaching</a></span>
                            </div>
                        </div>
                        <div class="post-content">
                            <div class="text">
                                <p>Ultricies tristique nulla aliquet enim tortor. Arcu bibendum at varius vel pharetra
                                    vel turpis nunc eget. Et leo duis ut diam quam nulla. Cras pulvinar mattis nunc sed
                                    blandit libero volutpat. Blandit volutpat maecenas volutpat blandit aliquam etiam
                                    erat velit. </p>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-cover">
                        <ul class="pagination">
                            <li class="pagination-item item-prev"><a href="{{ url('#') }}"><i class="fa fa-angle-left"
                                        aria-hidden="true"></i></a></li>
                            <li class="pagination-item active"><a href="{{ url('#') }}">1</a></li>
                            <li class="pagination-item"><a href="{{ url('#') }}">2</a></li>
                            <li class="pagination-item"><a href="{{ url('#') }}">3</a></li>
                            <li class="pagination-item"><a href="{{ url('#') }}">4</a></li>
                            <li class="pagination-item"><a href="{{ url('#') }}">5</a></li>
                            <li class="pagination-item item-next"><a href="{{ url('#') }}"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--================= SIDEBAR =================-->
                <div class="col-12 col-lg-4 sidebar">
                    <ul class="widgets">
                        <!--=========== WIDGET-SEARCH ===========-->
                        <li class="widget widget-search">
                            <h6 class="title">search</h6>
                            <form action="/" class="search-form">
                                <input type="text" name="search" placeholder="Search">
                                <button class="search-button" type="submit"><i class="fa fa-search"
                                        aria-hidden="true"></i></button>
                            </form>
                        </li>
                        <!--========= WIDGET-SEARCH END =========-->
                        <!--=============== WIDGET-ARHIVE ===============-->
                        <li class="widget widget-archive">
                            <h6 class="title">archive</h6>
                            <ul>
                                <li><a href="{{ url('#') }}">January 2019</a></li>
                                <li><a href="{{ url('#') }}">February 2019</a></li>
                                <li><a href="{{ url('#') }}">March 2019</a></li>
                                <li><a href="{{ url('#') }}">April 2019</a></li>
                                <li><a href="{{ url('#') }}">May 2019</a></li>
                            </ul>
                        </li>
                        <!--============ WIDGET-ARHIVE END ============-->
                        <!--=========== WIDGET-CATEGORIES ===========-->
                        <li class="widget widget-categories">
                            <h6 class="title">categories</h6>
                            <ul>
                                <li><a href="{{ url('#') }}">Training</a></li>
                                <li><a href="{{ url('#') }}">Courses</a></li>
                                <li><a href="{{ url('#') }}">Conferences</a></li>
                                <li><a href="{{ url('#') }}">Development</a></li>
                                <li><a href="{{ url('#') }}">UI/UX Designer</a></li>
                            </ul>
                        </li>
                        <!--========== WIDGET-CATEGORIES END ==========-->
                        <!--=========== WIDGET-RECENT-POSTS ===========-->
                        <li class="widget widget-recent-posts">
                            <h6 class="title">recent blog posts</h6>
                            <ul>
                                <li>
                                    <a href="{{ url('#') }}">Mobile App Design: From Beginner to Intermediate</a>
                                    <div class="date"><i class="fas fa-calendar-alt" aria-hidden="true"></i>Dec 27,
                                        2019
                                        at 5:47 pm</div>
                                </li>
                                <li>
                                    <a href="{{ url('#') }}">Et harum quidem rerum facilis est et expedita
                                        distinctio</a>
                                    <div class="date"><i class="fas fa-calendar-alt" aria-hidden="true"></i>Dec 17,
                                        2018
                                        at 5:47 pm</div>
                                </li>
                                <li>
                                    <a href="{{ url('#') }}">Nam libero tempore, cum soluta nobis est eligendi
                                        optio</a>
                                    <div class="date"><i class="fas fa-calendar-alt" aria-hidden="true"></i>Dec 8, 2018
                                        at 5:47 pm</div>
                                </li>
                            </ul>
                        </li>
                        <!--========== WIDGET-RECENT-POSTS END ==========-->
                        <!--=========== WIDGET-INSTAGRAM ===========-->
                        <li class="widget widget-instagram">
                            <h6 class="title">Gallery</h6>
                            <ul>
                                <li>
                                    <a href="{{ url('#') }}"><img
                                            src="{{ asset('assets/frontend/img/gal-1.jpg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="{{ url('#') }}"><img
                                            src="{{ asset('assets/frontend/img/gal-2.jpg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="{{ url('#') }}"><img
                                            src="{{ asset('assets/frontend/img/gal-3.jpg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="{{ url('#') }}"><img
                                            src="{{ asset('assets/frontend/img/gal-4.jpg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="{{ url('#') }}"><img
                                            src="{{ asset('assets/frontend/img/gal-5.jpg') }}" alt="img"></a>
                                </li>
                                <li>
                                    <a href="{{ url('#') }}"><img
                                            src="{{ asset('assets/frontend/img/gal-6.jpg') }}" alt="img"></a>
                                </li>
                            </ul>
                        </li>
                        <!--=========== WIDGET-INSTAGRAM END ===========-->
                        <!--=========== WIDGET-NEWSLETTER ===========-->
                        <li class="widget widget-newsletter">
                            <h6 class="title">newsletter</h6>
                            <form action="/" class="subscribe-form">
                                <input type="email" name="subscribe" placeholder="E-mail">
                                <button class="search-button" type="submit"><i class="fa fa-paper-plane"
                                        aria-hidden="true"></i></button>
                            </form>
                        </li>
                        <!--=========== WIDGET-NEWSLETTER END ===========-->
                    </ul>
                </div>
                <!--=============== SIDEBAR END ===============-->
            </div>
        </div>
    </section>
    <!--=================== S-NEWS END ===================-->

@endsection
