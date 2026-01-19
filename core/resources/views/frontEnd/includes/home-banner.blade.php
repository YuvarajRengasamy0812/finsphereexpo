@php
    use Illuminate\Support\Facades\Auth;
@endphp


<section class="main-two">
    <div class="main-slider-two">

        <!-- SLIDE 1 -->
        <div class="main-slide-two">
            <div class="main-slide-date">TBD</div>
            <div class="main-slider-bg" style="background-image: url('assets/frontend/img/bg-slider-home2.svg');"></div>

            <img class="img-slide " src="{{ asset('assets/frontend/img/banner/5.png') }}" alt="FINSPHERE EXPO KUWAIT">

            <div class="container">
                <div class="main-slide-item" style="margin-top: 100px">
                    <div class="date-slide">Location: KUWAIT &nbsp; | &nbsp; Dates: 7 - 8 MAY 2026 &nbsp; | &nbsp;
                        Entry: FREE</div>

                    <h2>
                        <span>FINSPHERE EXPO</span> KUWAIT
                    </h2>
                    <p class="slide-desc">
                        The Ultimate Fintech, Forex, Financial Expo in Kuwait
                    </p>

                    <div class="countdown-card">
                        <div class="countdown-timer" id="countdown-timer">
                            <div class="time-box">
                                <span id="days">00</span>
                                <small>Days</small>
                            </div>
                            <div class="time-box">
                                <span id="hours">00</span>
                                <small>Hours</small>
                            </div>
                            <div class="time-box">
                                <span id="minutes">00</span>
                                <small>Min</small>
                            </div>
                            <div class="time-box">
                                <span id="seconds">00</span>
                                <small>Sec</small>
                            </div>
                        </div>
                    </div>


                    <!-- <div class="slide-tag">
                        #Fintech #Forex  #Financial
                    </div> -->

                    <div class="slide-btn-cover">
                        <a href="{{ url('/visitor-booking') }}" class="btn btn-yellow">
                            Free visitor pass
                        </a>
                        <a href="{{ Auth::check() ? url('/exhibitor-booking') : url('/login') }}" class="btn btn-border">Become an
                            Exhibitor</a>
                    </div>
                </div>

            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="main-slide-two">
            <div class="main-slide-date">TBD</div>
            <div class="main-slider-bg" style="background-image: url('assets/frontend/img/bg-slider-home2.svg');"></div>

            <img class="img-slide" src="{{ asset('assets/frontend/img/banner/6.png') }}" alt="FINSPHERE EXPO KUWAIT">

            <div class="container">
                <div class="main-slide-item">
                    <div class="date-slide">Global Expo & High-Impact Summit</div>

                    <h2>
                        <span>Where Finance Meets</span> Innovation
                    </h2>

                    <p class="slide-desc" style="margin-bottom: 1rem!important">
                        Bringing together traders, investors, institutions, startups,<br>
                        influencers, and technology providers under one roof.
                    </p>

                    <!-- <div class="slide-tag">
                        #Finance #Trading #DigitalAssets
                    </div> -->

                    <div class="slide-btn-cover">
                        <a href="{{ url('/visitor-booking') }}" class="btn btn-yellow">
                            Free visitor pass
                        </a>
                        <a href="{{ url('/expo-summit') }}" class="btn btn-border">
                            Explore Expo & Summit
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="main-slide-two">
            <div class="main-slide-date">TBD</div>
            <div class="main-slider-bg" style="background-image: url('assets/frontend/img/bg-slider-home2.svg');"></div>

            <img class="img-slide" src="{{ asset('assets/frontend/img/banner/4.png') }}" alt="FINSPHERE EXPO KUWAIT">

            <div class="container">
                <div class="main-slide-item">
                    <div class="date-slide">Summit • Exhibition • Networking</div>

                    <h2>
                        <span>Join the Future of</span> Finance in Kuwait
                    </h2>

                    <p class="slide-desc" style="margin-bottom: 1rem!important">
                        A landmark financial innovation gathering designed to educate,<br>
                        connect, and empower the global financial community.
                    </p>

                    <!-- <div class="slide-tag">
                        #FutureOfFinance #FintechExpo #FinancialExpo
                    </div> -->

                    <div class="slide-btn-cover">
                        <a href="{{ url('/visitor-booking') }}" class="btn btn-yellow">
                            Free visitor pass
                        </a>
                        <a class="btn btn-border" href="{{ url('/speaker-booking') }}">
                            Become a Speaker
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="main-arrow-cover">
        <div class="container">
            <div class="main-slide-arrow"></div>
        </div>
    </div>
</section>
