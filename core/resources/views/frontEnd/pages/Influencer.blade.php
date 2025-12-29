@extends('frontEnd.layouts.master')

@section('title', 'Influencers | FINSPHERE EXPO KUWAIT')

@section('content')

<!--=================== PAGE TITLE ===================-->
<div class="page-title" style="background-image: url('{{ asset('assets/frontend/img/bg-page-title.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="title-line-left text-white animate__animated animate__fadeInDown">
            Influencers Program
        </h1>
        <div class="breadcrumbs animate__animated animate__fadeInUp">
            <ul class="list-unstyled d-flex gap-2">
                <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                <li class="text-white">Influencers</li>
            </ul>
        </div>
    </div>
</div>
<!--=================== PAGE TITLE END ===================-->

<!--=================== OVERVIEW SECTION ===================-->
<section class="in-overview py-5">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Content -->
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="in-title mb-4">Influencer Program</h2>
                <p>
                    FINSPHERE EXPO KUWAIT welcomes financial influencers, educators, and content creators to engage
                    with their communities, collaborate with global brands, and amplify industry knowledge.
                </p>
                <p>
                    This program is designed to empower voices that shape the future of finance by providing
                    exclusive access, collaboration opportunities, and premium networking experiences.
                </p>
                <p>
                    As an influencer, you become part of a powerful ecosystem connecting innovation, education,
                    and financial leadership.
                </p>
            </div>

            <!-- Right Rolling Image -->
            <div class="col-lg-6 text-center" data-aos="zoom-in">
                <div class="in-rolling-wrapper">
                    <img src="{{ asset('assets/frontend/img/influencer-main.png') }}" alt="Influencer Program" class="img-fluid in-rolling-img">
                </div>
            </div>

        </div>

        <!-- Bottom Image -->
        <div class="row mt-5">
            <div class="col-12 text-center" data-aos="fade-up">
                <img src="{{ asset('assets/frontend/img/influencer-main.png') }}" alt="Influencer Program" class="img-fluid in-bottom-img">
            </div>
        </div>
    </div>
</section>

<!--=================== WHY JOIN ===================-->
<section class="in-section bg-light py-5">
    <div class="container">
        <h2 class="in-title text-center mb-5" data-aos="fade-up">Why Join the Influencer Program?</h2>

        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
                <div class="in-card">
                    <h4>Exclusive Industry Access</h4>
                    <p>
                        Gain behind-the-scenes access to keynote sessions, expert panels, and exclusive interviews
                        with global financial leaders.
                    </p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="in-card">
                    <h4>Brand Collaborations</h4>
                    <p>
                        Partner with fintech brands, brokers, and financial institutions looking to connect with
                        authentic influencer voices.
                    </p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="in-card">
                    <h4>Content Creation Opportunities</h4>
                    <p>
                        Create high-impact content, live coverage, interviews, and educational material from the
                        expo floor.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================== INFLUENCER ACTIVITIES ===================-->
<section class="in-section py-5">
    <div class="container">
        <h2 class="in-title text-center mb-5" data-aos="fade-up">Influencer Activities</h2>

        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up">
                <div class="in-card in-card-alt">
                    <h4>Live Sessions & Panels</h4>
                    <p>
                        Participate in live discussions, panels, and interactive sessions designed to educate and
                        inspire your audience.
                    </p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="in-card in-card-alt">
                    <h4>Networking Meetups</h4>
                    <p>
                        Connect directly with industry experts, fellow influencers, and business leaders in curated
                        networking events.
                    </p>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="in-card in-card-alt">
                    <h4>Workshops & Masterclasses</h4>
                    <p>
                        Attend skill-based workshops focused on trading, investing, fintech, and content strategy.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================== WHO CAN APPLY ===================-->
<section class="in-section bg-light py-5">
    <div class="container">
        <h2 class="in-title text-center mb-5" data-aos="fade-up">Who Can Apply?</h2>

        <div class="row justify-content-center">
            <div class="col-lg-8 text-center" data-aos="fade-up">
                <p class="in-large-text">
                    Financial influencers, educators, analysts, traders, YouTubers, podcasters, bloggers,
                    and social media creators with a strong focus on finance, fintech, crypto, or investing
                    are encouraged to apply.
                </p>
            </div>
        </div>
    </div>
</section>

<!--=================== STYLES ===================-->
@push('styles')
<style>
/* GENERAL */
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

/* OVERVIEW */
.in-overview p {
    font-size: 1rem;
    line-height: 1.8;
}

/* ROLLING IMAGE */
.in-rolling-wrapper {
    width: 320px;
    height: 320px;
    margin: auto;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.in-rolling-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    animation: in-rotate 12s linear infinite;
}

@keyframes in-rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

.in-bottom-img {
    max-width: 450px;
    border-radius: 20px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}

/* SECTIONS */
.in-section p {
    font-size: 0.95rem;
    line-height: 1.7;
}

/* CARDS */
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

/* TEXT */
.in-large-text {
    font-size: 1.1rem;
    line-height: 1.8;
}
</style>
@endpush

<!--=================== AOS ===================-->
@push('scripts')
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init({
    once: true,
    duration: 1200,
    easing: 'ease-in-out',
});
</script>
@endpush

@endsection
