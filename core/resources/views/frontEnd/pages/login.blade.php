@extends('frontEnd.layouts.master')

@section('title', 'Sign In - FinSphere Expo Kuwait')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<style>
    /* =======================
       LOGIN PAGE CSS (fk-log-)
    ======================= */

    /* ===== Wrapper ===== */
    .fk-log-wrapper {
        min-height: 100vh;
        background: linear-gradient(135deg, #3E615D, #976737);
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px;
    }

    .fk-log-container {
        width: 100%;
        max-width: 1100px;
    }

    /* ===== Grid ===== */
    .fk-log-grid {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 30px;
        align-items: stretch;
    }

    /* ===== Left Card ===== */
    .fk-log-card {
        background: #fff;
        border-radius: 24px;
        padding: 30px;
        box-shadow: 0 30px 40px rgba(0, 0, 0, 0.2);
        display: flex;
        flex-direction: column;
    }

    .fk-log-contact {
        justify-content: space-between;
    }

    .fk-log-card-title {
        font-size: 20px;
        font-weight: 700;
        color: #976737;
        margin-bottom: 15px;
    }

    .fk-log-item {
        font-size: 14px;
        color: #555;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .fk-log-item i {
        color: #976737;
        margin-right: 10px;
    }

    .fk-log-map {
        margin-top: 15px;
        border-radius: 18px;
        overflow: hidden;
    }

    .fk-log-map iframe {
        width: 100%;
        height: 200px;
        border: none;
    }

    /* ===== Right Form ===== */
    .fk-log-title {
        font-size: 22px;
        font-weight: 800;
        background: linear-gradient(to right, #976737, #3E615D);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-align: center;
    }

    .fk-log-subtitle {
        text-align: center;
        font-size: 13px;
        color: #777;
        margin-bottom: 25px;
    }

    .fk-log-form {
        flex-grow: 1;
    }

    /* Inputs */


    /* 🔒 LOCK password & text to identical UI */
    .fk-log-input[type="email"],
    .fk-log-input[type="password"],
    .fk-log-input[type="text"] {
        width: 100% !important;
        min-width: 100% !important;
        max-width: 100% !important;
        margin: 0 0 15px 0;
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

    .fk-log-input:focus {
        outline: none;
        box-shadow: 0 0 0 2px rgba(151, 103, 55, 0.25) !important;
    }

    /* Password wrapper */
    .fk-log-password {
        position: relative;
        width: 100%;
        flex: 1 1 0%;
        min-width: 0;
    }

    .fk-log-eye {
        position: absolute;
        right: 18px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
        color: #777;
        z-index: 5;
    }

    .fk-log-eye svg {
        width: 18px;
        height: 18px;
    }

    .hidden {
        display: none;
    }

    /* Button */
    .fk-log-btn {
        margin-top: 15px;
        padding: 15px;
        border-radius: 30px;
        border: none;
        background: linear-gradient(135deg, #976737, #3E615D);
        color: #fff;
        font-weight: 700;
        cursor: pointer;
        transition: 0.3s;
        width: 100%;
    }

    .fk-log-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.25);
    }

    /* Switch / links */
    .fk-log-switch {
        text-align: center;
        margin-top: 15px;
        font-size: 13px;
    }

    .fk-log-switch a {
        color: #976737;
        font-weight: 700;
        text-decoration: none;
    }

    .fk-log-switch a:hover {
        text-decoration: underline;
    }

    @media (max-width: 992px) {
        .fk-log-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

@section('content')
    <div class="fk-log-wrapper">
        <div class="fk-log-container">
            <div class="fk-log-grid">

                {{-- LEFT CARD (Contact Info) --}}
                <div class="fk-log-card fk-log-contact">
                    <h4 class="fk-log-card-title">CONTACT INFO:</h4>

                    <p class="fk-log-item">
                        <i data-lucide="pin" class="w-4 h-4"></i>
                        Kuwait International Fair,<br>
                        Mubarak Al Abdullah Al Jaber, Block 6
                    </p>

                    <p class="fk-log-item">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        <a href="mailto:info@finsphereexpo.com">info@finsphereexpo.com</a>
                    </p>

                    <p class="fk-log-item">
                        <i data-lucide="phone"></i>
                        <a href="https://wa.me/96552222347" target="_blank">+965 5222 2347</a>
                    </p>

                    <p class="fk-log-item">
                        <i data-lucide="phone"></i>
                        <a href="https://wa.me/+971588845033" target="_blank">+971 588845033</a>
                    </p>

                    <div class="fk-log-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.61839005281!2d48.04374752498063!3d29.269360204878335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf9f71cb7149ff%3A0x82a12e9f4958c2e8!2sKuwait%20International%20Fairground!5e1!3m2!1sen!2sae!4v1767853127479!5m2!1sen!2sae"
                            loading="lazy" allowfullscreen>
                        </iframe>
                    </div>
                </div>

                {{-- RIGHT CARD (Login Form) --}}
                <div class="fk-log-card">
                    <h2 class="fk-log-title">Welcome Back</h2>
                    <p class="fk-log-subtitle">Sign in to continue</p>

                    {{-- Toastify Alerts --}}
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

                    <form class="fk-log-form" method="POST" action="{{ route('customerlogin') }}">
                        @csrf
                        <input type="email" class="fk-log-input" name="email" placeholder="Email address" required>

                        <div class="fk-log-password">
                            <input type="password" id="login-password" name="password" class="fk-log-input"
                                placeholder="Password" required>
                            <span class="fk-log-eye" data-target="login-password">
                                <i data-lucide="eye"></i>
                                <i data-lucide="eye-off" class="hidden"></i>
                            </span>
                        </div>

                        <div style="display:flex; justify-content:flex-end; margin-top:5px;">
                            <a href="{{ url('forgot-password') }}" class="fk-log-switch">Forgot password?</a>
                        </div>

                        <button type="submit" class="fk-log-btn">Sign In</button>
                    </form>

                    <p class="fk-log-switch">
                        Don’t have an account?
                        <a href="{{ url('register') }}">Create one</a>
                    </p>
                </div>

            </div>
        </div>
    </div>
@endsection
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            lucide.createIcons();

            document.addEventListener('click', function(e) {
                const eyeWrapper = e.target.closest('.fk-log-eye');
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
