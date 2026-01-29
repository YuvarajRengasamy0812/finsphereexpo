@extends('frontEnd.layouts.master')

@section('title', 'Sign Up - FinSphere Expo Kuwait')
<!-- Include Toastify CSS & JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<style>
    /* Optional custom styles for Toastify */
    .toastify {
        font-weight: bold;
    }

    /* ===== Wrapper ===== */
    .fk-reg-wrapper {
        min-height: 100vh;
        background: linear-gradient(135deg, #3E615D, #976737);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }

    .fk-reg-container {
        width: 100%;
        max-width: 1100px;
    }

    /* ===== Grid ===== */
    .fk-reg-grid {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 30px;
        align-items: stretch;
    }

    /* ===== Cards ===== */
    .fk-reg-card {
        background: #fff;
        border-radius: 24px;
        padding: 30px;
        box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
    }

    /* ===== Contact Card ===== */
    .fk-reg-contact {
        justify-content: space-between;
    }

    .fk-reg-card-title {
        font-size: 20px;
        font-weight: 700;
        color: #976737;
        margin-bottom: 15px;
    }

    .fk-reg-item {
        font-size: 14px;
        color: #555;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .fk-reg-item i {
        color: #976737;
        margin-right: 10px;
    }

    /* ===== Map ===== */
    .fk-reg-map {
        margin-top: 15px;
        border-radius: 18px;
        overflow: hidden;
    }

    .fk-reg-map iframe {
        width: 100%;
        height: 200px;
        border: none;
    }

    /* ===== Right Form ===== */
    .fk-reg-title {
        font-size: 22px;
        font-weight: 800;
        background: linear-gradient(to right, #976737, #3E615D);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-align: center;
    }

    .fk-reg-subtitle {
        text-align: center;
        font-size: 13px;
        color: #777;
        margin-bottom: 25px;
    }

    /* ===== Form ===== */
    .fk-reg-form {
        flex-grow: 1;
    }

    /* 🔒 GRID HARDENING (prevents width jump) */
    .fk-reg-row {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
        gap: 15px;
        margin-bottom: 15px;
    }

    /* ===== Inputs (BASE) ===== */
    .fk-reg-input {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;

        background: #F7F7F7;
        border: none;
        border-radius: 25px;
        height: 50px;
        padding: 0 20px;
        font-size: 14px;
        line-height: 50px;
        color: #707070;

        display: block;
        box-sizing: border-box !important;
        appearance: none;
        -webkit-appearance: none;
    }

    /* 🔒 LOCK password & text to identical UI */
    .fk-reg-input[type="password"],
    .fk-reg-input[type="text"] {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;

        background: #F7F7F7;
        border: none;
        border-radius: 25px;
        height: 50px;
        padding: 0 20px;
        font-size: 14px;
        line-height: 50px;
        color: #707070;

        display: block;
        box-sizing: border-box !important;
        appearance: none;
        -webkit-appearance: none;
    }

    /* Focus */
    .fk-reg-input:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(151, 103, 55, 0.25);
    }

    /* 🔒 PASSWORD WRAPPER FIX */
    .fk-reg-password {
        position: relative;
        width: 100%;
        flex: 1 1 0%;
        min-width: 0;
        /* CRITICAL */
    }

    /* Eye icon */
    .fk-reg-eye {
        position: absolute;
        right: 18px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #777;
        z-index: 5;
    }

    .fk-reg-eye svg {
        width: 18px;
        height: 18px;
    }

    .hidden {
        display: none;
    }

    /* ===== Button ===== */
    .fk-reg-btn {
        margin-top: 15px;
        padding: 15px;
        border-radius: 30px;
        border: none;
        background: linear-gradient(135deg, #976737, #3E615D);
        color: #fff;
        font-weight: 700;
        cursor: pointer;
        transition: 0.3s;
    }

    .fk-reg-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.25);
    }

    /* ===== Switch ===== */
    .fk-reg-switch {
        text-align: center;
        margin-top: 15px;
        font-size: 13px;
    }

    .fk-reg-switch a {
        color: #976737;
        font-weight: 700;
        text-decoration: none;
    }

    /* ===== Responsive ===== */
    @media (max-width: 992px) {
        .fk-reg-grid {
            grid-template-columns: 1fr;
        }
    }

    .fk-reg-accept-terms {
        color: #976737;
        font-size: 13px;
        font-weight: 400;
        cursor: pointer;

        display: flex;
        align-items: center;
        gap: 10px;

        user-select: none;
    }

    /* Normalize checkbox UI across browsers */
    .fk-reg-accept-terms input[type="checkbox"] {
        width: 13px;
        height: 13px;
        margin: 0;

        accent-color: #976737;
        /* modern browsers */
        cursor: pointer;

        flex-shrink: 0;
    }

    /* Optional hover effect */
    .fk-reg-accept-terms:hover {
        opacity: 0.9;
    }

    /* Link inside terms text (if any) */
    .fk-reg-accept-terms a {
        color: #976737;
        font-weight: 600;
        text-decoration: none;
    }

    .fk-reg-accept-terms a:hover {
        text-decoration: underline;
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

                            <input class="fk-reg-input" placeholder="Nationality" id="nationality">
                            <select class="fk-reg-input" name="nationalities">
                                <option value="">Select Country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country['title_en'] }}">
                                        {{ $country['title_en'] }}
                                    </option>
                                @endforeach

                            </select>
                            <input class="fk-reg-input" name="phone"placeholder="Phone Number" id="phone_number">
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
