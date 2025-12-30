@extends('frontEnd.layouts.master')

@section('title', 'PROFX MEDIA (Marketing Partner) - FinSphere Expo Kuwait')

<style>
    /* ================= PM ABOUT SECTION ================= */
    .pm-about-section {
        background: #ffffff;
        padding: 100px 0;
        position: relative;
        overflow: hidden;
    }

    .pm-container {
        max-width: 1200px;
        margin: auto;
        padding: 0 20px;
    }

    /* GRID */
    .pm-about-grid {
        display: grid;
        grid-template-columns: 1.1fr 1fr;
        gap: 70px;
        align-items: center;
    }

    /* LEFT CONTENT */
    .pm-tag {
        display: inline-block;
        font-size: 13px;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        color: #976737;
        font-weight: 600;
        margin-bottom: 16px;
    }

    .pm-title {
        font-size: 44px;
        line-height: 1.2;
        font-weight: 700;
        color: #976737 !important;
    }

    .pm-title span {
        color: #3E615D;
    }

    .pm-divider {
        width: 70px;
        height: 4px;
        background: linear-gradient(90deg, #3E615D, #976737);
        border-radius: 4px;
        margin: 22px 0;
    }

    .pm-description {
        font-size: 17px;
        line-height: 1.8;
        color: #707070;
        max-width: 520px;
    }

    /* RIGHT VISUAL */
    .pm-about-visual {
        display: grid;
        gap: 22px;
    }

    .pm-feature-card {
        background: #ffffff;
        border-radius: 18px;
        padding: 26px 28px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08);
        transition: all 0.35s ease;
        position: relative;
        overflow: hidden;
    }

    .pm-feature-card::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(135deg,
                rgba(62, 97, 93, 0.08),
                rgba(151, 103, 55, 0.08));
        opacity: 0;
        transition: opacity 0.35s ease;
    }

    .pm-feature-card:hover::before {
        opacity: 1;
    }

    .pm-feature-card:hover {
        transform: translateY(-6px);
    }

    .pm-feature-card i {
        width: 28px;
        height: 28px;
        color: #3E615D;
        margin-bottom: 12px;
    }

    .pm-feature-card h4 {
        font-size: 18px;
        font-weight: 600;
        color: #976737 !important;
        margin-bottom: 6px;
    }

    .pm-feature-card p {
        font-size: 14.5px;
        color: #707070;
        line-height: 1.6;
    }

    /* RESPONSIVE */
    @media (max-width: 991px) {
        .pm-about-grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }

        .pm-title {
            font-size: 36px;
        }
    }

    /* ================= PM GUINNESS RECORD ================= */
    /* ================= PM RECORD SECTION ================= */
    .pm-record-section {
        background: #ffffff;
        padding: 110px 0;
        position: relative;
        overflow: hidden;
    }

    /* GRID */
    .pm-record-grid {
        display: grid;
        grid-template-columns: 1.1fr 0.9fr;
        gap: 80px;
        align-items: center;
    }

    /* LEFT CONTENT */
    .pm-record-tag {
        display: inline-block;
        font-size: 13px;
        letter-spacing: 1.4px;
        text-transform: uppercase;
        color: #976737;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .pm-record-title {
        font-size: 44px;
        line-height: 1.2;
        font-weight: 800;
        color: #976737 !important;
    }

    .pm-record-title span {
        color: #3E615D;
    }

    .pm-record-divider {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #976737, #3E615D);
        border-radius: 6px;
        margin: 24px 0;
    }

    .pm-record-text {
        font-size: 17px;
        line-height: 1.85;
        color: #707070;
        max-width: 560px;
    }

    /* RIGHT CARD */
    .pm-record-visual {
        display: flex;
        justify-content: center;
    }

    .pm-record-card {
        background: linear-gradient(135deg,
                rgba(151, 103, 55, 0.08),
                rgba(62, 97, 93, 0.08));
        border-radius: 24px;
        padding: 40px 36px;
        max-width: 420px;
        text-align: center;
        position: relative;
        box-shadow: 0 30px 70px rgba(0, 0, 0, 0.12);
        transition: all 0.4s ease;
    }

    .pm-record-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 40px 90px rgba(0, 0, 0, 0.18);
    }


    /* TEXT */
    .pm-record-card h3 {
        font-size: 22px;
        font-weight: 700;
        color: #976737 !important;
        margin-bottom: 4px;
    }

    .pm-record-card span {
        font-size: 14px;
        font-weight: 600;
        color: #976737;
        letter-spacing: 0.6px;
    }

    .pm-record-line {
        width: 60px;
        height: 3px;
        background: linear-gradient(90deg, #3E615D, #976737);
        margin: 18px auto;
        border-radius: 3px;
    }

    .pm-record-card p {
        font-size: 15px;
        color: #707070;
        line-height: 1.7;
    }

    /* RESPONSIVE */
    @media (max-width: 991px) {
        .pm-record-grid {
            grid-template-columns: 1fr;
            gap: 60px;
            text-align: center;
        }

        .pm-record-title {
            font-size: 36px;
        }

        .pm-record-text {
            margin: 0 auto;
        }
    }

    /* ================= PM ROLE SECTION ================= */
    /* ================= PM ROLE SECTION ================= */
.pm-role-section {
    background: #ffffff;
    padding: 110px 0;
}

/* HEADER */
.pm-role-header {
    max-width: 760px;
    margin: 0 auto 70px;
    text-align: center;
}

.pm-role-tag {
    display: inline-block;
    font-size: 13px;
    letter-spacing: 1.3px;
    text-transform: uppercase;
    color: #976737;
    font-weight: 700;
    margin-bottom: 14px;
}

.pm-role-title {
    font-size: 42px;
    line-height: 1.25;
    font-weight: 800;
    color: #223645;
    margin-bottom: 14px;
}

.pm-role-title span {
    color: #3E615D;
}

.pm-role-subtitle {
    font-size: 16.5px;
    line-height: 1.8;
    color: #707070;
}

/* GRID */
.pm-role-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 26px;
}

/* CARD */
.pm-role-card {
    background: #ffffff;
    border-radius: 20px;
    padding: 30px 26px;
    text-align: center;
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.08);
    transition: all 0.35s ease;
    position: relative;
    overflow: hidden;
}

.pm-role-card::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(
        135deg,
        rgba(62, 97, 93, 0.08),
        rgba(151, 103, 55, 0.08)
    );
    opacity: 0;
    transition: opacity 0.35s ease;
}

.pm-role-card:hover::before {
    opacity: 1;
}

.pm-role-card:hover {
    transform: translateY(-8px);
}

/* ICON */
.pm-role-card i {
    width: 32px;
    height: 32px;
    color: #3E615D;
    margin-bottom: 14px;
}

/* TEXT */
.pm-role-card h4 {
    font-size: 17px;
    font-weight: 700;
    color: #223645;
    margin-bottom: 8px;
}

.pm-role-card p {
    font-size: 14.5px;
    line-height: 1.7;
    color: #707070;
}

/* RESPONSIVE */
@media (max-width: 1200px) {
    .pm-role-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .pm-role-grid {
        grid-template-columns: repeat(1, 1fr);
    }

    .pm-role-title {
        font-size: 34px;
    }
}

</style>

@section('content')

    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">PROFX MEDIA</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>PROFX MEDIA</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--================== PM ABOUT SECTION ==================-->
    <section class="pm-about-section">
        <div class="pm-container">

            <div class="pm-about-grid">

                <!-- LEFT CONTENT -->
                <div class="pm-about-content" data-aos="fade-up">
                    <span class="pm-tag">Marketing Partner</span>

                    <h2 class="pm-title">
                        Global Powerhouse in <br>
                        <span>Event Marketing & Execution</span>
                    </h2>

                    <div class="pm-divider"></div>

                    <p class="pm-description">
                        ProFX Media is a globally recognized event management and marketing company
                        specializing in <strong>forex, fintech, financial expo</strong> events.
                        With a strong international presence, ProFX Media delivers high-impact expos,
                        summits, and award ceremonies across major global markets.
                    </p>
                </div>

                <!-- RIGHT VISUAL BLOCK -->
                <div class="pm-about-visual" data-aos="fade-left">

                    <div class="pm-feature-card">
                        <i data-lucide="globe"></i>
                        <h4>Global Reach</h4>
                        <p>Multi-market expos & summits across international hubs</p>
                    </div>

                    <div class="pm-feature-card">
                        <i data-lucide="bar-chart-3"></i>
                        <h4>Strategic Growth</h4>
                        <p>Data-driven marketing & audience acquisition</p>
                    </div>

                    <div class="pm-feature-card">
                        <i data-lucide="calendar-check"></i>
                        <h4>World-Class Events</h4>
                        <p>Premium expos, summits & award ceremonies</p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--================== PM ABOUT SECTION END ==================-->

    <!--================== PM GUINNESS RECORD ==================-->
    <section class="pm-record-section">
        <div class="pm-container">

            <div class="pm-record-grid">

                <!-- LEFT CONTENT -->
                <div class="pm-record-content" data-aos="fade-up">
                    <span class="pm-record-tag">Guinness World Record</span>

                    <h2 class="pm-record-title">
                        Setting a Global Benchmark <br>
                        in <span>Live Trading Events</span>
                    </h2>

                    <div class="pm-record-divider"></div>

                    <p class="pm-record-text">
                        ProFX Media proudly holds a <strong>Guinness World Record</strong> for organizing
                        the world’s most participated live trading competition — a landmark achievement
                        that reflects unmatched execution excellence, operational scale, and audience
                        engagement.
                    </p>
                </div>

                <!-- RIGHT ACHIEVEMENT CARD -->
                <div class="pm-record-visual" data-aos="zoom-in">

                    <div class="pm-record-card">
                        <div class="">
                            <a
                                href="https://www.guinnessworldrecords.com/world-records/774828-most-participants-in-a-trading-competition">
                                <img class="w-50 img-fluid mb-3" alt="guiness"
                                    src="{{ asset('assets/frontend/img/resources/guinness.png') }}">
                            </a>
                        </div>

                        <h3>World’s Most Participated</h3>
                        <span>Live Trading Competition</span>

                        <div class="pm-record-line"></div>

                        <p>
                            Recognized globally for record-breaking participation,
                            flawless coordination, and industry-leading impact.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--================== PM GUINNESS RECORD END ==================-->

    <!--================== PM ROLE SECTION ==================-->
    <section class="pm-role-section">
        <div class="pm-container">

            <!-- Header -->
            <div class="pm-role-header" data-aos="fade-up">
                <span class="pm-role-tag">Official Marketing Partner</span>
                <h2 class="pm-role-title">
                    Driving Global Visibility for <br>
                    <span>FINSPHERE EXPO KUWAIT</span>
                </h2>
                <p class="pm-role-subtitle">
                    As the official marketing partner, ProFX Media orchestrates end-to-end
                    global promotion, strategic outreach, and audience growth for FINSPHERE
                    EXPO KUWAIT.
                </p>
            </div>

            <!-- Pillars -->
            <div class="pm-role-grid">

                <div class="pm-role-card" data-aos="fade-up" data-aos-delay="0">
                    <i data-lucide="megaphone"></i>
                    <h4>Global Promotion</h4>
                    <p>
                        Multi-channel campaigns across international markets to maximize
                        brand exposure and event reach.
                    </p>
                </div>

                <div class="pm-role-card" data-aos="fade-up" data-aos-delay="100">
                    <i data-lucide="share-2"></i>
                    <h4>Strategic Outreach</h4>
                    <p>
                        Targeted engagement with traders, institutions, fintech leaders,
                        and professional communities.
                    </p>
                </div>

                <div class="pm-role-card" data-aos="fade-up" data-aos-delay="200">
                    <i data-lucide="users"></i>
                    <h4>Influencer Engagement</h4>
                    <p>
                        Collaboration with top industry influencers to drive credibility
                        and global audience trust.
                    </p>
                </div>

                <div class="pm-role-card" data-aos="fade-up" data-aos-delay="300">
                    <i data-lucide="radio"></i>
                    <h4>Media Partnerships</h4>
                    <p>
                        Strategic alliances with global media platforms for sustained
                        visibility and amplification.
                    </p>
                </div>

                <div class="pm-role-card" data-aos="fade-up" data-aos-delay="400">
                    <i data-lucide="user-plus"></i>
                    <h4>Attendee Acquisition</h4>
                    <p>
                        Data-backed acquisition strategies ensuring strong participation
                        from quality global attendees.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <!--================== PM ROLE SECTION END ==================-->


    <!--================== CTA SECTION ==================-->
    @include('frontEnd.includes.cta-section')
    <!--================== CTA SECTION END ==================-->

@endsection
