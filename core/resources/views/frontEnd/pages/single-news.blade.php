@extends('frontEnd.layouts.master')

@section('title', 'News Details FinSphere Expo Kuwait')

@section('content')


    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">Blog News Details</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>News Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--===================== S-NEWS =====================-->
    <section class="s-news s-single-news">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 blog-cover">
                    <div class="post-item-cover">
                        <div class="post-header">
                            <div class="post-thumbnail">
                                <img src="{{ asset('assets/frontend/img/news-1.jpg') }}" alt="img">
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
                                <p>Cras pulvinar mattis nunc sed blandit libero volutpat. Blandit volutpat maecenas
                                    volutpat blandit aliquam etiam erat velit. Amet consectetur adipiscing elit
                                    pellentesque. Ultricies tristique nulla aliquet enim tortor.</p>
                                <p>Ultricies tristique nulla aliquet enim tortor. Arcu bibendum at varius vel pharetra
                                    vel turpis nunc eget. Et leo duis ut diam quam nulla. Cras pulvinar mattis nunc sed
                                    blandit libero volutpat. Blandit volutpat maecenas volutpat blandit aliquam etiam
                                    erat velit. Amet consectetur adipiscing elit pellentesque.</p>
                                <blockquote>
                                    <p>Arcu bibendum at varius vel pharetra vel turpis nunc eget. Et leo duis ut diam
                                        quam nulla. Cras pulvinar mattis nunc sed blandit libero volutpat. Blandit
                                        volutpat maecenas volutpat blandit aliquam etiam erat velit. Amet consectetur
                                        adipiscing elit pellentesque.</p>
                                    <cite>By <a href="{{ url('#') }}">Kerry Ashman</a></cite>
                                </blockquote>
                                <p>Non odio euismod lacinia at quis. Auctor augue mauris augue neque gravida. Mauris
                                    commodo quis imperdiet massa tincidunt nunc pulvinar. In tellus integer feugiat
                                    scelerisque varius morbi enim. Fringilla ut morbi tincidunt augue interdum velit.
                                    Est velit egestas dui id ornare arcu odio. Amet mattis vulputate enim nulla aliquet
                                    porttitor lacus luctus accumsan. Vel elit scelerisque mauris pellentesque pulvinar
                                    pellentesque. Amet massa vitae tortor condimentum lacinia quis vel. Ut tellus
                                    elementum sagittis vitae et</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-news-social">
                        <span>Share this post</span>
                        <ul>
                            <li><a target="_blank" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            </li>
                            <li><a target="_blank" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com"><i class="fab fa-youtube"
                                        aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="reviews">
                        <h4 class="title">Comments</h4>
                        <ul class="reviews-list">
                            <li class="item">
                                <div class="review-item">
                                    <div class="review-avatar"><img src="{{ asset('assets/frontend/img/comment-1.png') }}"
                                            alt="img"></div>
                                    <div class="review-content">
                                        <h6 class="name">Ella Bryan</h6>
                                        <div class="date"><i class="fas fa-calendar-alt" aria-hidden="true"></i>Dec 26,
                                            2019</div>
                                        <p class="review-comment">Non odio euismod lacinia at quis. Auctor augue mauris
                                            augue neque gravida. Mauris commodo quis imperdiet massa tincidunt nunc
                                            pulvinar. In tellus integer feugiat scelerisque varius morbi enim.</p>
                                        <a href="{{ url('#') }}" class="review-btn"><i class="fa fa-reply"
                                                aria-hidden="true"></i> Reply</a>
                                    </div>
                                </div>
                                <ul class="child">
                                    <li class="item">
                                        <div class="review-item">
                                            <div class="review-avatar"><img
                                                    src="{{ asset('assets/frontend/img/comment-3.png') }}" alt="img">
                                            </div>
                                            <div class="review-content">
                                                <h6 class="name">Richard Spencer </h6>
                                                <div class="date"><i class="fas fa-calendar-alt"
                                                        aria-hidden="true"></i>Dec 27, 2019</div>
                                                <p class="review-comment">Non odio euismod lacinia at quis. Auctor augue
                                                    mauris augue neque gravida. Mauris commodo quis imperdiet massa
                                                    tincidunt nunc pulvinar. In tellus integer feugiat scelerisque
                                                    varius morbi enim.</p>
                                                <a href="{{ url('#') }}" class="review-btn"><i class="fa fa-reply"
                                                        aria-hidden="true"></i> Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="reviews-form">
                            <h4 class="title">Leave a Comment</h4>
                            <form action="/">
                                <ul class="form-cover">
                                    <li class="inp-name"><input type="text" name="your-name" placeholder="Name"></li>
                                    <li class="inp-email"><input type="email" name="your-email" placeholder="E-mail">
                                    </li>
                                    <li class="inp-text">
                                        <textarea name="your-text" placeholder="Message"></textarea>
                                    </li>
                                </ul>
                                <div class="checkbox-wrap">
                                    <div class="checkbox-cover">
                                        <input type="checkbox">
                                        <p>By using this form you agree with the storage and handling of your data by
                                            this website.</p>
                                    </div>
                                </div>
                                <div class="btn-form-cover">
                                    <button type="submit" class="btn">send comment</button>
                                </div>
                            </form>
                        </div>
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
            <div class="relative-posts">
                <h2 class="title-line">Recent Posts</h2>
                <p class="slogan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore.</p>
                <div class="row">
                    <div class="col-12 col-sm-4 relative-post-item">
                        <h4 class="title title-line-left"><a href="{{ url('/single-news') }}">Creating a Wordpress Blog
                                for
                                Beginners</a></h4>
                        <div class="post-thumbnail">
                            <span class="post-category"><a href="{{ url('#') }}">Coaching</a></span>
                            <a class="post-thumbnail-link" href="{{ url('/single-news') }}">
                                <img src="{{ asset('assets/frontend/img/news-1.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="meta">
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i>By <a
                                    href="{{ url('#') }}">Samson peters</a></span>
                            <span class="post-date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><a
                                    href="{{ url('#') }}">Dec 26, 2019</a></span>
                        </div>
                        <div class="post-content">
                            <p>Ultricies tristique nulla aliquet enim tortor. Arcu bibendum at varius vel pharetra vel
                                turpis nunc eget.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 relative-post-item">
                        <h4 class="title title-line-left"><a href="{{ url('/single-news') }}">Lorem Data Analysis with
                                Pandas
                            </a></h4>
                        <div class="post-thumbnail">
                            <span class="post-category"><a href="{{ url('#') }}">Testing</a></span>
                            <a class="post-thumbnail-link" href="{{ url('/single-news') }}">
                                <img src="{{ asset('assets/frontend/img/news-2.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="meta">
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i>By <a
                                    href="{{ url('#') }}">Samson peters</a></span>
                            <span class="post-date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><a
                                    href="{{ url('#') }}">Dec 26, 2019</a></span>
                        </div>
                        <div class="post-content">
                            <p>Ultricies tristique nulla aliquet enim tortor. Arcu bibendum at varius vel pharetra vel
                                turpis nunc eget.</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 relative-post-item">
                        <h4 class="title title-line-left"><a href="{{ url('/single-news') }}">UX & Web Design Master
                                Course:
                                Strategy, Design</a></h4>
                        <div class="post-thumbnail">
                            <span class="post-category"><a href="{{ url('#') }}">Coaching</a></span>
                            <a class="post-thumbnail-link" href="{{ url('/single-news') }}">
                                <img src="{{ asset('assets/frontend/img/overview-2.jpg') }}" alt="img">
                            </a>
                        </div>
                        <div class="meta">
                            <span class="post-by"><i class="fa fa-user" aria-hidden="true"></i>By <a
                                    href="{{ url('#') }}">Samson peters</a></span>
                            <span class="post-date"><i class="fas fa-calendar-alt" aria-hidden="true"></i><a
                                    href="{{ url('#') }}">Dec 26, 2019</a></span>
                        </div>
                        <div class="post-content">
                            <p>Ultricies tristique nulla aliquet enim tortor. Arcu bibendum at varius vel pharetra vel
                                turpis nunc eget.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=================== S-NEWS END ===================-->


@endsection
