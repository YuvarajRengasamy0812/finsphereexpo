{{-- Sign In Form --}}
@extends('frontEnd.layouts.master')

@section('title', 'Sign In - FinSphere Expo Kuwait')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<style>
    /* Optional custom styles for Toastify */
    .toastify {
        font-weight: bold;
    }
</style>
@section('content')
<div class="fk-auth-wrapper">
    <div class="fk-auth-card">
        <h2 class="fk-auth-title">Welcome Back</h2>
        <p class="fk-auth-subtitle">Sign in to continue</p>

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

        <form class="fk-auth-form" method="POST" action="{{ route('customerlogin') }}">
            @csrf
            <input type="email" class="fk-input" name="email" placeholder="Email address" required>

            <div class="fk-input-wrapper">
                <input type="password" id="login-password" name="password" class="fk-input" placeholder="Password" required>
                <i class="fa fa-eye fk-eye-toggle" data-target="login-password"></i>
            </div>

            <div class="fk-auth-row">
                <a href="{{ url('forgot-password') }}" class="fk-forgot">Forgot password?</a>
            </div>

            <button type="submit" class="fk-btn-primary">Sign In</button>
        </form>

        <p class="fk-switch">
            Don’t have an account?
            <a href="{{ url('register') }}">Create one</a>
        </p>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('click', function(e) {
    const icon = e.target.closest('.fk-eye-toggle');
    if (!icon) return;

    const input = document.getElementById(icon.dataset.target);
    const isPassword = input.type === 'password';

    input.type = isPassword ? 'text' : 'password';

    icon.classList.toggle('fa-eye', !isPassword);
    icon.classList.toggle('fa-eye-slash', isPassword);
});
</script>
@endpush
