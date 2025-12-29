@extends('frontEnd.layouts.master')

@section('title', 'Influencers | FINSPHERE EXPO KUWAIT')

@section('content')

<style>
/* ================= GENERAL ================= */
.in-title {
    font-size: 2rem;
    font-weight: 700;
    position: relative;
    display: inline-block;
}
.in-title::after {
    content: '';
    display: block;
    width: 70px;
    height: 5px;
    background: #f39c12;
    margin-top: 10px;
    border-radius: 5px;
}

.in-overview p {
    font-size: 1rem;
    line-height: 1.8;
}

/* ================= ORBIT DESIGN ================= */
.orbit-wrapper {
    position: relative;
    width: 380px;
    height: 380px;
    margin: auto;
}

/* Center Image */
.orbit-center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 5;
}
.orbit-center img {
    width: 220px;
    height: 220px;
    border-radius: 50%;
    /* box-shadow: 0 20px 45px rgba(0,0,0,0.3); */
    background: #fff;
    padding: 6px;
}

/* Rotating Icons */
.orbit-rotate {
    width: 100%;
    height: 100%;
    animation: orbitSpin 14s linear infinite;
}

.orbit-item {
    position: absolute;
    width: 60px;
    height: 60px;
}

.orbit-item img {
    width: 100%;
    height: 100%;
    padding: 8px;
    background: #ffffff;
    border-radius: 50%;
    box-shadow: 0 6px 18px rgba(0,0,0,0.2);
}

/* Positions */
.orbit-top { top: 0; left: 50%; transform: translateX(-50%); }
.orbit-right { right: 0; top: 50%; transform: translateY(-50%); }
.orbit-bottom { bottom: 0; left: 50%; transform: translateX(-50%); }
.orbit-left { left: 0; top: 50%; transform: translateY(-50%); }

@keyframes orbitSpin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

/* ================= SECTIONS ================= */
.in-section p {
    font-size: 0.95rem;
    line-height: 1.7;
}

/* ================= CARDS ================= */
.in-card {
    background: #ffffff;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: all 0.4s ease;
    height: 100%;
}
.in-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}
.in-card h4 {
    font-weight: 600;
    margin-bottom: 15px;
}
.in-card-alt {
    background: linear-gradient(135deg, #ffffff, #f8f9fa);
}

/* ================= TEXT ================= */
.in-large-text {
    font-size: 1.1rem;
    line-height: 1.8;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 576px) {
    .orbit-wrapper {
        width: 300px;
        height: 300px;
    }
    .orbit-center img {
        width: 150px;
        height: 150px;
    }
    .orbit-item {
        width: 50px;
        height: 50px;
    }
}
</style>

<!-- ================= PAGE TITLE ================= -->
<div class="page-title" style="background-image: url('{{ asset('assets/frontend/img/bg-page-title.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="title-line-left text-white" data-aos="fade-down">
            Influencers Program
        </h1>
        <div class="breadcrumbs" data-aos="fade-up">
            <ul class="list-unstyled d-flex gap-2">
                <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                <li class="text-white">Influencers</li>
            </ul>
        </div>
    </div>
</div>

<!-- ================= OVERVIEW ================= -->
<section class="in-overview py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="in-title mb-4">Influencer Program</h2>
                <p>
                    FINSPHERE EXPO KUWAIT welcomes financial influencers, educators, and content creators
                    to collaborate with global brands and amplify financial innovation.
                </p>
                <p>
                    Exclusive access, premium networking, and industry exposure empower influencers
                    to shape the future of finance.
                </p>
                <p>
                    Be part of a powerful ecosystem connecting innovation, education, and leadership.
                </p>
            </div>

            <!-- Right Orbit Image -->
            <div class="col-lg-6 text-center" data-aos="zoom-in">
                <div class="orbit-wrapper">

                    <div class="orbit-center">
                        <img src="{{ asset('assets/frontend/img/influencer.png') }}" alt="Influencer" >
                    </div>

                    <div class="orbit-rotate">
                        <div class="orbit-item orbit-top">
                            <img src="{{ asset('assets/frontend/img/icons/wifi.gif') }}">
                        </div>
                        <div class="orbit-item orbit-right">
                            <img src="{{ asset('assets/frontend/img/icons/images2.gif') }}">
                        </div>
                        <div class="orbit-item orbit-bottom">
                            <img src="{{ asset('assets/frontend/img/icons/image.gif') }}">
                        </div>
                        <div class="orbit-item orbit-left">
                            <img src="{{ asset('assets/frontend/img/icons/live.gif') }}">
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================= WHY JOIN ================= -->
<section class="in-section bg-light py-5">
    <div class="container">
        <h2 class="in-title text-center mb-5" data-aos="fade-up">
            Why Join the Influencer Program?
        </h2>

        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
                <div class="in-card">
                    <h4>Exclusive Industry Access</h4>
                    <p>Behind-the-scenes access to keynotes, panels, and industry leaders.</p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="in-card">
                    <h4>Brand Collaborations</h4>
                    <p>Partner with fintech brands seeking authentic influencer voices.</p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="in-card">
                    <h4>Content Opportunities</h4>
                    <p>Create live coverage, interviews, and high-impact educational content.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ================= WHO CAN APPLY ================= -->
<section class="in-section py-5">
    <div class="container">
        <h2 class="in-title text-center mb-4" data-aos="fade-up">Who Can Apply?</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <p class="in-large-text">
                    Financial influencers, traders, analysts, educators, YouTubers,
                    podcasters, bloggers, and finance-focused content creators.
                </p>
            </div>
        </div>
    </div>
</section>

@include('frontEnd.includes.cta-section')

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
