@extends('frontEnd.layouts.master')

@section('title', 'Sign Up - FinSphere Expo Kuwait')
<!-- Include Toastify CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.0/build/css/intlTelInput.css">
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.0/build/js/intlTelInput.min.js"></script>

<style>
    /* Wrapper */
    .fk-phone .iti {
        width: 100%;
    }

    /* Main input */
    .fk-phone .iti input {
        width: 100% !important;
        height: 50px;
        border-radius: 25px !important;
        background: #F7F7F7;
        border: 1px solid #c6c6c6;
        /* padding-left: 70px !important;  */
        font-size: 14px;
        line-height: 50px;
        color: #707070;
    }

    /* Flag container */
    .fk-phone .iti__flag-container {
        border-radius: 25px 0 0 25px;
    }

    /* Flag button */
    .fk-phone .iti__selected-flag {
        padding: 0 4px;
        border-radius: 25px 0 0 25px;
    }

    /* Dropdown */
    .fk-phone .iti__country-list {
        border-radius: 12px;
    }

    /* Focus state */
    .fk-phone .iti input:focus {
        outline: none;
        box-shadow: none;
        border-color: #00b100;
        /* FinSphere green */
    }

    /* Remove intl default weird borders */
    .iti--allow-dropdown input,
    .iti--allow-dropdown input:focus {
        border: 1px solid #c6c6c6 !important;
    }
</style>

@section('content')
    <div class="fk-reg-wrapper">
        <div class="fk-reg-container">

            <div class="fk-reg-grid">

                {{-- LEFT CARD --}}
                <div class="fk-reg-card fk-reg-contact">
                    <h4 class="fk-reg-card-title">CONTACT INFO:</h4>

                    <p class="fk-reg-item">
                        <i data-lucide="pin" class="w-4 h-4"></i>
                        Al Badriya Ballroom - Kuwait,<br>
                        Jumeirah Messilah Beach Hotel & Resort.
                    </p>

                    <p class="fk-reg-item">
                        <i data-lucide="mail" class="w-4 h-4"></i> <a
                            href="mailto:info@finsphereexpo.com">info@finsphereexpo.com</a>
                    </p>

                    <p class="fk-reg-item">
                        <i data-lucide="phone"></i> <a href="https://wa.me/96552222347" target="_blank">+965 5222 2347</a>
                    </p>

                    <p class="fk-reg-item">
                        <i data-lucide="phone"></i> <a href="https://wa.me/+971588845033" target="_blank">+971 588845033</a>
                    </p>


                    <div class="fk-reg-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.634731415047!2d48.08568337498055!3d29.268829804902936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf7564e3cd15f1%3A0x675d67bb213da8c9!2sjumeirah%20Badriya%20Hall%20rode%20no%20-%206!5e1!3m2!1sen!2sae!4v1769681084166!5m2!1sen!2sae"
                            loading="lazy" allowfullscreen>
                        </iframe>
                    </div>
                </div>

                {{-- RIGHT CARD --}}
                <div class="fk-reg-card">
                    <h2 class="fk-reg-title">Register for FinSphere Expo Kuwait 2026</h2>
                    <p class="fk-reg-subtitle">Join FinSphere Expo</p>

                    @if (session('success'))
                        <script>
                            Toastify({
                                text: "{{ session('success') }}",
                                duration: 3000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "#4CAF50",
                                stopOnFocus: true
                            }).showToast();
                        </script>
                    @endif

                    @if ($errors->any())
                        <script>
                            Toastify({
                                text: "{{ $errors->first() }}",
                                duration: 4000,
                                close: true,
                                gravity: "top",
                                position: "right",
                                backgroundColor: "#f44336",
                                stopOnFocus: true
                            }).showToast();
                        </script>
                    @endif
                    <form class="fk-reg-form" method="POST" action="{{ route('sportsRegister') }}">
                        @csrf
                        <div class="fk-reg-row">
                            <input class="fk-reg-input" name="name" placeholder="Full Name">
                            <input class="fk-reg-input" name="email" placeholder="Email">
                        </div>

                        <div class="fk-reg-row">
                            <select class="fk-reg-input" name="nationalities" id="nationality_select">
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country['title_en'] }}">
                                        {{ $country['title_en'] }}
                                    </option>
                                @endforeach
                            </select>

                            <!-- <input class="fk-reg-input" name="phone"placeholder="Phone Number" id="phone_number"> -->
                            <div class="w-100 fk-phone">
                                <input type="tel" id="phone" class="fk-reg-input" placeholder="Phone number">
                                <input type="hidden" name="phone" id="full_phone">
                            </div>

                        </div>

                        <div class="fk-reg-row">
                            <input class="fk-reg-input" name="company" placeholder="Company Name">
                            <input class="fk-reg-input" name="designation" placeholder="Position">
                        </div>

                        <div class="fk-reg-row">
                            <div class="fk-reg-password">
                                <input type="password" name="password" id="password" class="fk-reg-input"
                                    placeholder="Password">

                                <span class="fk-reg-eye" data-target="password">
                                    <i data-lucide="eye"></i>
                                    <i data-lucide="eye-off" class="hidden"></i>
                                </span>
                            </div>

                            <div class="fk-reg-password">
                                <input type="password" name="real_password" id="confirm_password" class="fk-reg-input"
                                    placeholder="Confirm Password">

                                <span class="fk-reg-eye" data-target="confirm_password">
                                    <i data-lucide="eye"></i>
                                    <i data-lucide="eye-off" class="hidden"></i>
                                </span>
                            </div>
                        </div>



                        <div class="fk-reg-row">
                            <select class="fk-reg-input" name="type">
                                <option value="">User Type</option>
                                <option value="trader">Trader</option>
                                <option value="visitor">Visitor</option>
                                <option value="investor">Investor</option>
                                <option value="ib">IB</option>
                                <option value="liquidity_provider">Liquidity Provider</option>
                                <option value="influencer">Influencer</option>
                                <option value="media_companies">Media Companies</option>
                                <option value="technology_provider">Technology Provider</option>
                                <option value="payment_solution">Payment Solution</option>
                                <option value="fund_manager">Fund Manager & Institutional Traders</option>
                            </select>

                            <select class="fk-reg-input" name="source">
                                <option value="">Refferal Source</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Linkdin">Linkdin</option>
                                <option value="Instgram">Instgram</option>
                                <option value="GoogleSearch">Google Search</option>
                                <option value="News">News</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="fk-reg-accept-terms">
                            <input type="checkbox">
                            <p>Accept <a href="#">Terms & Conditions</a></p>
                        </div>

                        <div style="display: flex; justify-content: center;">

                            <button type="submit" class="fk-reg-btn">Register</button>
                        </div>

                        <p class="fk-reg-switch">
                            Already have an account?
                            <a href="{{ url('/login') }}">Login</a>
                        </p>

                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection
<script>
    document.getElementById('country_select').addEventListener('change', function() {
        let code = this.value; // +91, +971 etc
        let phoneInput = document.getElementById('phone_number');

        if (code) {
            phoneInput.value = code + ' ';
            phoneInput.focus();
        }
    });

    // Allow only numbers after country code
    document.getElementById('phone_number').addEventListener('input', function() {
        let value = this.value;

        // keep + at start
        let clean = value.replace(/(?!^\+)[^0-9]/g, '');
        this.value = clean;
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        lucide.createIcons();

        document.addEventListener('click', function(e) {
            const eyeWrapper = e.target.closest('.fk-reg-eye');
            if (!eyeWrapper) return;

            const input = document.getElementById(eyeWrapper.dataset.target);
            if (!input) return;

            const eye = eyeWrapper.querySelector('[data-lucide="eye"]');
            const eyeOff = eyeWrapper.querySelector('[data-lucide="eye-off"]');

            if (input.type === 'password') {
                input.type = 'text';
                eye.classList.add('hidden');
                eyeOff.classList.remove('hidden');
            } else {
                input.type = 'password';
                eyeOff.classList.add('hidden');
                eye.classList.remove('hidden');
            }
        });
    });
</script>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const phoneInput = document.querySelector("#phone");
    const hiddenPhone = document.querySelector("#full_phone");
    const countrySelect = document.querySelector("#nationality_select");

    const iti = window.intlTelInput(phoneInput, {
        initialCountry: "auto",
        separateDialCode: true,
        geoIpLookup: function (callback) {
            fetch("https://ipapi.co/json/")
                .then(res => res.json())
                .then(data => {
                    callback(data.country_code);
                    syncNationality(data.country_name);
                })
                .catch(() => {
                    callback("kw");
                    syncNationality("Kuwait");
                });
        },
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.0/build/js/utils.js"
    });

    // Save full phone number
    phoneInput.addEventListener("blur", function () {
        if (iti.isValidNumber()) {
            hiddenPhone.value = iti.getNumber();
        }
    });

    // When user changes flag manually
    phoneInput.addEventListener("countrychange", function () {
        const countryData = iti.getSelectedCountryData();
        syncNationality(countryData.name);
    });

    function syncNationality(countryName) {
        if (!countrySelect) return;

        [...countrySelect.options].forEach(option => {
            option.selected =
                option.text.trim().toLowerCase() === countryName.toLowerCase();
        });
    }

});
</script>

