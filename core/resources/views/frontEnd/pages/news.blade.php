@extends('frontEnd.layouts.master')

@section('title', 'News & Updates - FinSphere Expo Kuwait')

@section('content')

<!-- ================= PAGE HERO ================= -->
<section class="news-hero" style="background-image:url('{{ asset('assets/frontend/img/bg-page-title.jpg') }}')">
    <div class="hero-overlay"></div>
    <div class="container">
        <div class="hero-content" data-aos="fade-up">
            <h1 class="title-line-left text-white" style="color:#fff">News & Updates</h1>
            <p class="hero-subtitle">
                Stay updated with the latest announcements, speaker reveals, exhibitor confirmations,
                and event milestones of FINSPHERE EXPO KUWAIT.
            </p>
        </div>
    </div>
</section>

<!-- ================= NEWS SECTION ================= -->
<section class="news-section py-5">
    <div class="container">

        <div class="row g-4">

            <!-- NEWS CARD -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up">
                <div class="news-card">
                    <div class="news-img">
                        <img src="{{ asset('assets/frontend/img/news-1.jpg') }}" alt="">
                        <div class="news-overlay">
                            <span class="news-tag">Announcement</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <h4>Official Speaker Line-up Revealed</h4>
                        <p>
                            FINSPHERE EXPO KUWAIT unveils top global speakers shaping the future of finance.
                        </p>
                        <a href="{{ url('/single-news') }}" class="news-link">
                            Read More <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- NEWS CARD -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="news-card">
                    <div class="news-img">
                        <img src="{{ asset('assets/frontend/img/news-2.jpg') }}" alt="">
                        <div class="news-overlay">
                            <span class="news-tag">Exhibitors</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <h4>Leading Fintech Brands Confirmed</h4>
                        <p>
                            Major fintech companies confirm their participation at FINSPHERE EXPO KUWAIT.
                        </p>
                        <a href="{{ url('/single-news') }}" class="news-link">
                            Read More <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- NEWS CARD -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="news-card">
                    <div class="news-img">
                        <img src="{{ asset('assets/frontend/img/overview-2.jpg') }}" alt="">
                        <div class="news-overlay">
                            <span class="news-tag">Milestone</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <h4>Expo Registration Hits Major Milestone</h4>
                        <p>
                            Thousands of attendees register as excitement builds for FINSPHERE EXPO KUWAIT.
                        </p>
                        <a href="{{ url('/single-news') }}" class="news-link">
                            Read More <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- ================= CTA ================= -->
@include('frontEnd.includes.cta-section')

<!-- ================= STYLES ================= -->
<style>
/* HERO */
.news-hero {
    position: relative;
    padding: 120px 0;
    background-size: cover;
    background-position: center;
}
.hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(135deg, rgba(0,0,0,.7), rgba(0,0,0,.4));
}
.hero-content {
    position: relative;
    max-width: 700px;
}
.hero-subtitle {
    color: #ddd;
    margin-top: 15px;
    font-size: 1.1rem;
}

/* NEWS CARDS */
.news-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0,0,0,.08);
    transition: all .4s ease;
    height: 100%;
}
.news-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 55px rgba(0,0,0,.15);
}

/* IMAGE */
.news-img {
    position: relative;
    height: 220px;
    overflow: hidden;
}
.news-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform .6s ease;
}
.news-card:hover img {
    transform: scale(1.1);
}

/* OVERLAY */
.news-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,.6), transparent);
}
.news-tag {
    position: absolute;
    bottom: 15px;
    left: 15px;
    background: #f39c12;
    color: #fff;
    padding: 6px 14px;
    border-radius: 30px;
    font-size: .8rem;
}

/* CONTENT */
.news-content {
    padding: 25px;
}
.news-content h4 {
    font-weight: 600;
    margin-bottom: 12px;
}
.news-content p {
    font-size: .95rem;
    color: #555;
}
.news-link {
    display: inline-block;
    margin-top: 15px;
    font-weight: 600;
    color: #f39c12;
}
.news-link i {
    margin-left: 5px;
    transition: transform .3s;
}
.news-link:hover i {
    transform: translateX(5px);
}
</style>

<!-- ================= AOS ================= -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
    once: true,
    duration: 1200,
    easing: 'ease-in-out'
});
</script>

@endsection
