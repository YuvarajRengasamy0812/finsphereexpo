@extends('frontEnd.layouts.master')

@section('title', 'Exhibit at FINSPHERE EXPO KUWAIT')

@section('content')

<!--=================== PAGE-TITLE ===================-->
<div class="page-title" style="background-image: url('{{ asset('assets/frontend/img/bg-page-title.jpg') }}'); background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="title-line-left text-white animate__animated animate__fadeInDown">Exhibit at FINSPHERE EXPO KUWAIT</h1>
        <div class="breadcrumbs animate__animated animate__fadeInUp">
            <ul class="list-unstyled d-flex gap-2">
                <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                <li class="text-white">Exhibit</li>
            </ul>
        </div>
    </div>
</div>
<!--================= PAGE-TITLE END =================-->

<!--==================== WHY EXHIBIT ====================-->
<section class="why-exhibit py-5" style="background-color: #f8f9fa;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left side image -->
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="zoom-in" data-aos-duration="1200">
                <div class="why-img overflow-hidden rounded-4 shadow-lg hover-scale">
                    <img src="{{ asset('assets/frontend/img/exhibit.jpg') }}" alt="Why Exhibit" class="img-fluid w-100 border-radius-custom">
                </div>
            </div>

            <!-- Right side content -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <h2 class="title-line-left mb-4">Why Exhibit</h2>
                <p>Position your brand at the forefront of financial innovation. Exhibiting at FINSPHERE EXPO KUWAIT offers direct access to a highly targeted audience of traders, investors, decision-makers, and industry professionals.</p>
                <p>The expo serves as a dynamic meeting point where ideas transform into action, emerging technologies gain real-world exposure, and strategic partnerships are forged.</p>
                <p>Through keynote sessions, expert panels, live demonstrations, workshops, and networking forums, FINSPHERE EXPO delivers a future-focused experience designed to shape the next era of finance.</p>
                <p>Exhibiting gives your brand unparalleled visibility, networking opportunities, and access to business leads from multiple sectors in the financial ecosystem.</p>
            </div>
        </div>
    </div>
</section>

<!--==================== EXHIBITOR BENEFITS ====================-->
<section class="benefits py-5 bg-light">
    <div class="container">
        <h2 class="title-line-left mb-5" data-aos="fade-up">Exhibitor Benefits</h2>
        <div class="row g-4">
            @php
                $benefits = [
                    ['img'=>'snack-booth.png','title'=>'High-visibility Booth Placement','desc'=>'Ensure your brand is seen by top industry professionals and attendees.'],
                    ['img'=>'branding.png','title'=>'Brand Exposure & Media Coverage','desc'=>'Gain maximum visibility across our marketing channels and media partners.'],
                    ['img'=>'lead.png','title'=>'Lead Generation & Partnerships','desc'=>'Connect with potential clients and strategic partners for business growth.'],
                    ['img'=>'engagement.png','title'=>'Direct Engagement with Attendees','desc'=>'Interact directly with decision-makers and attendees during the expo.'],
                ];
            @endphp

          
            
            <div class="IS-grid">
                  @foreach($benefits as $index => $benefit)
      <div class="IS-card" data-aos="fade-up" data-aos-delay="50">
        <img class="img-fluid IS-card-img "style="display:block; margin:0 auto 15px;" src="{{ asset('assets/frontend/img/icons/'.$benefit['img']) }}" alt="{{ $benefit['title'] }}" alt=""width="70">
        <h4>{{ $benefit['title'] }}</h4>
        <p>{{ $benefit['desc'] }}</p>
      </div>
 @endforeach
      </div>
           
        </div>
    </div>
</section>
    @include('frontEnd.includes.cta-section')
<!--==================== STYLES ====================-->

<style>
    .border-radius-custom {
        border-radius: 20px !important;
    }
    .hover-scale img, .hover-scale {
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }
    .hover-scale:hover img, .hover-scale:hover {
        transform: scale(1.08);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }
    .hover-shadow:hover {
        box-shadow: 0 15px 35px rgba(0,0,0,0.2) !important;
    }
    .title-line-left {
        position: relative;
        display: inline-block;
        font-weight: 700;
        font-size: 2rem;
    }
    .title-line-left::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -10px;
        height: 5px;
        width: 80px;
        background: #f39c12;
        border-radius: 5px;
    }
    .benefit-card img {
        filter: grayscale(0%);
        transition: all 0.3s ease;
    }
    .benefit-card:hover img {
        filter: grayscale(0%);
    }
    .benefit-card h5 {
        font-size: 1.1rem;
    }
    .benefit-card p {
        font-size: 0.95rem;
    }
</style>


<!--==================== AOS ANIMATION ====================-->

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        once: true,
        duration: 1200,
        easing: 'ease-in-out',
    });
</script>


@endsection
