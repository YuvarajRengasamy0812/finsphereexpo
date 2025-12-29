@extends('frontEnd.layouts.master')

@section('title', 'Expo & Summit - FinSphere Expo Kuwait')

<style>
    /* Expo Overview Section */
    .es-expo-overview {
        position: relative;
        overflow: hidden;
    }

    .es-expo-overview .es-title {
        font-size: 2.5rem;
        font-weight: 700;
    }

    .es-expo-overview .es-content {
        font-size: 1.1rem;
        line-height: 1.8;
    }
    .es-expo-overview .es-img {
        border-radius: 15px;
        transition: transform 0.3s ease;
    }

    .es-expo-overview .es-img:hover {
        transform: scale(1.05);
    }

    /* Summit Overview Section */
    .es-summit-overview {
        position: relative;
    }

    .es-summit-overview .es-title {
        font-size: 2.5rem;
        font-weight: 700;
        /* color: #976737; */
    }

    .es-summit-overview .es-content {
        font-size: 1.1rem;
        line-height: 1.8;
        /* color: #fff; */
    }

    .es-summit-overview .es-topics {
        list-style: none;
        padding-left: 0;
    }

    .es-summit-overview .es-topics li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 0.8rem;
    }

    .es-summit-overview .es-topics li::before {
        content: '';
        position: absolute;
        left: 0;
        top: 8px;
        width: 12px;
        height: 12px;
        background-color: #976737;
        border-radius: 50%;
    }


    .es-summit-overview .es-img {
        border-radius: 15px;
        transition: transform 0.3s ease;
    }

    .es-summit-overview .es-img:hover {
        transform: scale(1.05);
    }

    /* Networking Section */
    .es-networking {
        color: #0f0f0f;
    }

    /* Section Heading */
    .es-networking .es-title {
        font-size: 2.6rem;
        font-weight: 700;
        color: #976737;
    }

    .es-networking .es-subtitle {
        font-size: 1.1rem;
        line-height: 1.7;
        color: #0f0f0f;
    }

    /* Column as flex for equal height */
    .es-networking .col-lg-4,
    .es-networking .col-md-6 {
        display: flex;
    }

    /* Card */
    .es-network-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 40px 32px;
        text-align: center;
        transition: all 0.35s ease;
        border: 1px solid rgba(0, 0, 0, 0.08);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);

        /* 🔑 Equal height magic */
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 100%;
    }

    /* Hover */
    .es-network-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 18px 45px rgba(0, 0, 0, 0.12);
    }

    /* Icon */
    .es-network-card .es-icon {
        font-size: 2.6rem;
        margin-bottom: 22px;
        color: #976737;
        background: rgba(151, 103, 55, 0.1);
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
    }


    /* Title */
    .es-network-card .es-card-title {
        font-size: 1.35rem;
        font-weight: 600;
        color: #976737;
        margin-bottom: 16px;
    }

    /* Text */
    .es-network-card .es-card-text {
        font-size: 0.96rem;
        line-height: 1.75;
        color: #0f0f0f;
    }

    /* Who Should Attend Section */
    /* Who Should Attend */
    .es-attend {
        background-color: #f7f7f7;
    }

    .es-attend .es-title {
        font-size: 2.4rem;
        font-weight: 700;
        color: #976737;
    }

    .es-attend .es-subtitle {
        font-size: 1.05rem;
        color: #444;
    }

    /* Cards */
    .es-attend-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 30px 28px;
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.06);
        transition: all 0.3s ease;
    }

    .es-attend-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.1);
    }

    .es-attend-card h5 {
        font-weight: 600;
        color: #3E615D;
        margin-bottom: 12px;
    }

    .es-attend-card p {
        font-size: 0.95rem;
        line-height: 1.7;
        color: #555;
    }

    /* Icon Wrapper */
    .es-attend-icon {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: rgba(151, 103, 55, 0.12);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 22px;
    }

    /* Lucide Icon */
    .es-attend-icon svg {
        width: 26px;
        height: 26px;
        stroke: #976737;
        stroke-width: 2;
    }

    /* Small hover enhancement */
    .es-attend-card:hover .es-attend-icon {
        background: #976737;
    }

    .es-attend-card:hover .es-attend-icon svg {
        stroke: #ffffff;
    }
</style>

@section('content')

    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">Expo & Summit</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Expo & Summit</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--=================== EXPO OVERVIEW ===================-->
    <section class="es-expo-overview py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Text Content -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="es-title mb-3">The <span style="color: #976737">FINSPHERE</span> Expo Experience</h2>
                    <p class="es-content mb-4">
                        The FINSPHERE Expo Hall features a dynamic showcase of global companies presenting
                        their latest solutions, platforms, and technologies. Attendees can interact directly with
                        exhibitors, explore live demos, and discover new opportunities.
                    </p>
                    <a href="#" class="btn btn-primary">Explore Exhibitors</a>
                </div>

                <!-- Image / Visual -->
                <div class="col-lg-6 text-center">
                    <img src="{{ asset('assets/frontend/img/resources/expo-hall.jpg') }}" alt="FINSPHERE Expo"
                        class="img-fluid es-img">
                </div>
            </div>
        </div>
    </section>
    <!--================= EXPO OVERVIEW END =================-->

    <!--=================== SUMMIT OVERVIEW ===================-->
    <section class="es-summit-overview py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image / Visual -->
                <div class="col-lg-6 text-center mb-4 mb-lg-0">
                    <img src="{{ asset('assets/frontend/img/resources/summit-stage.jpg') }}" alt="FINSPHERE Summit"
                        class="img-fluid es-img">
                </div>

                <!-- Text Content -->
                <div class="col-lg-6">
                    <h2 class="es-title mb-3">The <span style="color: #976737">FINSPHERE</span> Summit</h2>
                    <p class="es-content mb-4">
                        The FINSPHERE Summit brings industry leaders, market experts, and innovators to the stage
                        for insightful discussions, keynote presentations, and panel sessions covering:
                    </p>
                    <ul class="es-topics mb-4">
                        <li>Future of Trading & Digital Finance</li>
                        <li>Blockchain & Web3 Innovation</li>
                        <li>Crypto Markets & Regulation</li>
                        <li>Fintech Transformation</li>
                        <li>Technology in Financial Markets</li>
                    </ul>
                    <a href="#" class="btn btn-primary">View Summit Schedule</a>
                </div>
            </div>
        </div>
    </section>
    <!--================= SUMMIT OVERVIEW END =================-->

    <!--=================== NETWORKING ZONES ===================-->
    <section class="es-networking py-5">
        <div class="container">
            <!-- Section Header -->
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5" style="text-align: center">
                    <h2 class="es-title mb-3">High-Impact Networking Zones</h2>
                    <p class="es-subtitle">
                        Purpose-built spaces designed to connect industry leaders, innovators,
                        investors, and decision-makers in a professional yet relaxed environment.
                    </p>
                </div>
            </div>

            <!-- Networking Cards -->
            <div class="row">
                <!-- Zone 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="es-network-card h-100">
                        <div class="es-icon">
                            <i data-lucide="network"></i>
                        </div>
                        <h4 class="es-card-title">Business Networking Lounge</h4>
                        <p class="es-card-text">
                            A premium lounge environment enabling exhibitors, investors, and
                            enterprise leaders to build partnerships and explore collaborations.
                        </p>
                    </div>
                </div>

                <!-- Zone 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="es-network-card h-100">
                        <div class="es-icon">
                            <i data-lucide="users"></i>
                        </div>
                        <h4 class="es-card-title">Investor & VIP Meeting Areas</h4>
                        <p class="es-card-text">
                            Dedicated meeting zones for high-level discussions, deal-making,
                            and strategic conversations with key stakeholders.
                        </p>
                    </div>
                </div>

                <!-- Zone 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="es-network-card h-100">
                        <div class="es-icon">
                            <i data-lucide="globe"></i>
                        </div>
                        <h4 class="es-card-title">Community & Influencer Zones</h4>
                        <p class="es-card-text">
                            Interactive spaces for influencers, educators, and communities to
                            connect, collaborate, and engage with their audiences.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================= NETWORKING ZONES END =================-->

    <!--=================== WHO SHOULD ATTEND ===================-->
    <section class="es-attend py-5">
        <div class="container">

            <!-- Header -->
            <div class="row">
                <div class="col-lg-8 mx-auto text-center mb-5" style="text-align: center">
                    <h2 class="es-title mb-3">Who Should Attend FINSPHERE Expo & Summit</h2>
                    <p class="es-subtitle">
                        A global meeting point for professionals shaping the future of finance,
                        trading, and technology.
                    </p>
                </div>
            </div>

            <!-- Cards -->
            <div class="row">

                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="es-attend-card w-100">
                        <div class="es-attend-icon">
                            <i data-lucide="trending-up"></i>
                        </div>
                        <h5>Traders & Investors</h5>
                        <p>Explore markets, strategies, platforms, and investment opportunities.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="es-attend-card w-100">
                        <div class="es-attend-icon">
                            <i data-lucide="building-2"></i>
                        </div>
                        <h5>Financial Institutions</h5>
                        <p>Connect with technology providers, innovators, and industry leaders.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="es-attend-card w-100">
                        <div class="es-attend-icon">
                            <i data-lucide="cpu"></i>
                        </div>
                        <h5>Fintech, Crypto & Blockchain Companies</h5>
                        <p>Showcase solutions, gain visibility, and build partnerships.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="es-attend-card w-100">
                        <div class="es-attend-icon">
                            <i data-lucide="layers"></i>
                        </div>
                        <h5>Brokers & Technology Providers</h5>
                        <p>Engage directly with traders, institutions, and potential clients.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="es-attend-card w-100">
                        <div class="es-attend-icon">
                            <i data-lucide="users"></i>
                        </div>
                        <h5>Influencers & Educators</h5>
                        <p>Grow your community, collaborate with brands, and share insights.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4 d-flex">
                    <div class="es-attend-card w-100">
                        <div class="es-attend-icon">
                            <i data-lucide="rocket"></i>
                        </div>
                        <h5>Startups & Innovators</h5>
                        <p>Pitch ideas, gain exposure, and connect with investors.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--================= WHO SHOULD ATTEND END =================-->

    <!--================== CTA SECTION ==================-->
    @include('frontEnd.includes.cta-section')
    <!--================== CTA SECTION END ==================-->

@endsection
