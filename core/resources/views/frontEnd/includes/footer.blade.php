<footer>
    <div class="container">
        <div class="row gy-4">
            <!-- BRAND / ABOUT -->
            <div class="col-12 col-md-4">
                <a href="{{ url('/') }}" class="footer-logo d-inline-block mb-3">
                    <img src="{{ asset('assets/frontend/img/resources/logo.png') }}" alt="FINSPHERE EXPO KUWAIT">
                </a>

                <p class="footer-text">
                    FINSPHERE EXPO KUWAIT is a premier financial innovation platform
                    bringing together fintech, forex, crypto, blockchain, and trading
                    leaders through a world-class expo and summit experience.
                </p>

                <ul class="soc-link mt-3">
                    <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a target="_blank" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>

            <!-- CONTACT -->
            <div class="col-12 col-sm-6 col-md-4">
                <h6 class="mb-3">Contact Us</h6>
                <ul class="footer-contacts">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kuwait (Venue: TBD)</span>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>
                        <a href="mailto:info@finsphereexpo.com">
                            info@finsphereexpo.com
                        </a>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>
                        <span>Available on Request</span>
                    </li>
                </ul>
            </div>

            <!-- QUICK LINKS -->
            <div class="col-12 col-sm-6 col-md-4">
                <h6 class="mb-3">Quick Links</h6>
                <div class="row">
                    <div class="col-6">
                        <ul class="footer-contacts">
                            <li><a href="{{ url('/about') }}">About FINSPHERE</a></li>
                            <li><a href="{{ url('/expo-summit') }}">Expo & Summit</a></li>
                            <li><a href="{{ url('/speakers') }}">Speakers</a></li>
                            <li><a href="{{ url('/exhibitors') }}">Exhibitors</a></li>
                            <li><a href="{{ url('/influencers') }}">Influencers</a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="footer-contacts">
                            <li><a href="{{ url('/profx-media') }}">ProFX Media</a></li>
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
                        © FINSPHERE EXPO KUWAIT. All Rights Reserved.
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
    const eventDate = new Date("May 5, 2026 09:00:00").getTime();

    const countdown = setInterval(() => {
        const now = new Date().getTime();
        const distance = eventDate - now;

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerText = days.toString().padStart(2, '0');
        document.getElementById("hours").innerText = hours.toString().padStart(2, '0');
        document.getElementById("minutes").innerText = minutes.toString().padStart(2, '0');
        document.getElementById("seconds").innerText = seconds.toString().padStart(2, '0');

        if (distance < 0) {
            clearInterval(countdown);
            document.getElementById("countdown-timer").innerHTML = "Event Started!";
        }
    }, 1000);
</script>


<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 19325421;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";
    window.__lc.group = 5;;
    (function(n, t, c) {
        function i(n) {
            return e._h ? e._h.apply(null, n) : e._q.push(n)
        }
        var e = {
            _q: [],
            _h: null,
            _v: "2.0",
            on: function() {
                i(["on", c.call(arguments)])
            },
            once: function() {
                i(["once", c.call(arguments)])
            },
            off: function() {
                i(["off", c.call(arguments)])
            },
            get: function() {
                if (!e._h) throw new Error("[LiveChatWidget] You can't use getters before load.");
                return i(["get", c.call(arguments)])
            },
            call: function() {
                i(["call", c.call(arguments)])
            },
            init: function() {
                var n = t.createElement("script");
                n.async = !0, n.type = "text/javascript", n.src = "https://cdn.livechatinc.com/tracking.js",
                    t.head.appendChild(n)
            }
        };
        !n.__lc.asyncInit && e.init(), n.LiveChatWidget = n.LiveChatWidget || e
    }(window, document, [].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/19325421/" rel="nofollow">Chat with us</a>, powered by <a
        href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
