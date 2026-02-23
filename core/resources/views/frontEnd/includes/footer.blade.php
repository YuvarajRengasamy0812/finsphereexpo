<footer>
    <div class="container">
        <div class="row gy-4">
            <!-- BRAND / ABOUT -->
            <div class="col-12 col-md-4">
                <a href="{{ url('/') }}" class="footer-logo d-inline-block mb-3">
                    <img src="{{ asset('assets/frontend/img/resources/logo.png') }}" alt="FINSPHERE EXPO KUWAIT">
                </a>

                <p class="footer-text">
                    <b>FINSPHERE EXPO KUWAIT</b> is a premier financial innovation platform
                    bringing together fintech, forex,financial expo, and trading
                    leaders through a world-class expo and summit experience.
                </p>

                <ul class="soc-link mt-3">

                    <li>
                        <a target="_blank" href="www.instagram.com/finsphereexpo">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.facebook.com/finsphereexpo">
                            <i data-lucide="facebook" class="w-5 h-5"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://www.linkedin.com/company/finsphereexpo">
                            <i data-lucide="linkedin" class="w-5 h-5"></i>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" href="https://x.com/finsphereexpo">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" stroke-width="1.9" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path
                                    d="M14.234 10.162 22.977 0h-2.072l-7.591 8.824L7.251 0H.258l9.168 13.343L.258 24H2.33l8.016-9.318L16.749 24h6.993zm-2.837 3.299-.929-1.329L3.076 1.56h3.182l5.965 8.532.929 1.329 7.754 11.09h-3.182z" />
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- CONTACT -->
            <div class="col-12 col-sm-6 col-md-4">
                <h6 class="mb-3">Contact Us</h6>
                <ul class="footer-contacts">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kuwait - Al Badriya Ballroom</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@finsphereexpo.com">
                            info@finsphereexpo.com
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <a href="https://wa.me/96552222347" target="_blank">
                            +965 5222 2347
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        {{-- <a href="https://wa.me/96555554293" target="_blank">
                            +965 5555 4293
                        </a> --}}
                        <a href="https://wa.me/+971588845033" target="_blank">
                            +971 5888 45033
                        </a>
                    </li>
                </ul>
            </div>

            <!-- QUICK LINKS -->
            <div class="col-12 col-sm-6 col-md-4">
                <h6 class="mb-3" style="text-align:center">Quick Links</h6>
                <div class="row">
                    <div class="col-6">
                        <ul class="footer-contacts">
                            <li><a href="{{ url('/about') }}">About FINSPHERE</a></li>
                            <li><a href="{{ url('/expo-summit') }}">Expo & Summit</a></li>
                            <li><a href="{{ url('/speakers') }}">Speakers</a></li>
                            <li><a href="{{ url('/exhibitors') }}">Exhibitors</a></li>
                            <li><a href="{{ url('/Influencer') }}">Influencers</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="footer-contacts">
                            <li><a href="{{ url('/profxmedia') }}">ProFX Media</a></li>
                            <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                            <li><a href="{{ url('/news') }}">News & Updates</a></li>
                            <li><a href="{{ url('/contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom mt-4">
        <div class="container">
            <div class="row align-items-center gy-2">
                <div class="col-12 col-md-6">
                    <div class="copyright">
                        © <b>FINSPHERE EXPO KUWAIT</b>. All Rights Reserved.
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <ul class="footer-menu justify-content-md-end">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/expo-summit') }}">Expo & Summit</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

{{-- Countdown Timer --}}
<script>
    // Set your event date here
    const eventDate = new Date("May 6, 2026 09:00:00").getTime();
    const daysEl = document.getElementById("days");
    const hoursEl = document.getElementById("hours");
    const minutesEl = document.getElementById("minutes");
    const secondsEl = document.getElementById("seconds");
    const countdownWrap = document.getElementById("countdown-timer");

    if (daysEl && hoursEl && minutesEl && secondsEl) {
        const countdown = setInterval(() => {
            const now = new Date().getTime();
            const distance = eventDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            daysEl.innerText = days.toString().padStart(2, '0');
            hoursEl.innerText = hours.toString().padStart(2, '0');
            minutesEl.innerText = minutes.toString().padStart(2, '0');
            secondsEl.innerText = seconds.toString().padStart(2, '0');

            if (distance < 0) {
                clearInterval(countdown);
                if (countdownWrap) countdownWrap.innerHTML = "Event Started!";
            }
        }, 1000);
    }
</script>

<script src="https://unpkg.com/lucide@latest"></script>
<script>
    lucide.createIcons();
</script>
