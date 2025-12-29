<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <a href="{{ url('/') }}" class="footer-logo">
                    <img src="{{ asset('assets/frontend/img/resources/logo.png') }}" alt="logo">
                    {{-- <div class="logo-text"><span>info</span>rmex</div> --}}
                </a>
                <div class="footer-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore.</div>
                <ul class="soc-link">
                    <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li><a target="_blank" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-4">
                <h6>Contacts</h6>
                <ul class="footer-contacts">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="{{ url('/contact') }}">7100 Athens Place <br>Washington, DC 20521</a>
                    </li>
                    <li>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <a href="tel:18001234567">1-800-1234-567</a>
                        <a href="tel:18008763765">1-800-8763-765</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a href="mailto:informex@info.mail">informex@info.mail</a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-sm-6 col-md-4 insta-list-cover">
                <h6>Quick Links</h6>
                <ul class="insta-list">
                    <li><a target="_blank" href="{{ url('#') }}"><img class="lazy"
                                src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                                data-src="{{ asset('assets/frontend/img/insta-1.jpg') }}" alt="social"></a></li>
                    <li><a target="_blank" href="{{ url('#') }}"><img class="lazy"
                                src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                                data-src="{{ asset('assets/frontend/img/insta-2.jpg') }}" alt="social"></a></li>
                    <li><a target="_blank" href="{{ url('#') }}"><img class="lazy"
                                src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                                data-src="{{ asset('assets/frontend/img/insta-3.jpg') }}" alt="social"></a></li>
                    <li><a target="_blank" href="{{ url('#') }}"><img class="lazy"
                                src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                                data-src="{{ asset('assets/frontend/img/insta-4.jpg') }}" alt="social"></a></li>
                    <li><a target="_blank" href="{{ url('#') }}"><img class="lazy"
                                src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                                data-src="{{ asset('assets/frontend/img/insta-5.jpg') }}" alt="social"></a></li>
                    <li><a target="_blank" href="{{ url('#') }}"><img class="lazy"
                                src="{{ asset('assets/frontend/img/placeholder-all.png') }}"
                                data-src="{{ asset('assets/frontend/img/insta-6.jpg') }}" alt="social"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="copyright">© 2025. <a target="_blank" href="https://finsphereexpo.com">FinsphereExpo</a>. All Rights
                        Reserved.</div>
                </div>
                <div class="col-8">
                    <ul class="footer-menu">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about') }}">About us</a></li>
                        <li><a href="{{ url('/events') }}">Events</a></li>
                        <li><a href="{{ url('/speakers') }}">Speakers</a></li>
                        <li><a href="{{ url('/contact') }}">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Start of LiveChat (www.livechat.com) code -->
<script>
	window.__lc = window.__lc || {};
    window.__lc.license = 19325421;
    window.__lc.integration_name = "manual_channels";
    window.__lc.product_name = "livechat";
  window.__lc.group = 5;
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/19325421/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->
