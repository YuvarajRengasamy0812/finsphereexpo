@extends('frontEnd.layouts.master')

@section('title', 'Sign In - FinSphere Expo Kuwait')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

<style>
    
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
                        Al Badriya Ballroom - Kuwait,<br>
                        Jumeirah Messilah Beach Hotel & Resort.
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.634731415047!2d48.08568337498055!3d29.268829804902936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fcf7564e3cd15f1%3A0x675d67bb213da8c9!2sjumeirah%20Badriya%20Hall%20rode%20no%20-%206!5e1!3m2!1sen!2sae!4v1769681084166!5m2!1sen!2sae"
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
