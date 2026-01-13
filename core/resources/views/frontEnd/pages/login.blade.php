{{-- Sign In Form --}}
@extends('frontEnd.layouts.master')

@section('title', 'Sign In - FinSphere Expo Kuwait')

@section('content')
<div class="fk-auth-wrapper">
    <div class="fk-auth-card">
        <h2 class="fk-auth-title">Welcome Back</h2>
        <p class="fk-auth-subtitle">Sign in to continue</p>

        <form class="fk-auth-form">
            <input type="email" class="fk-input" placeholder="Email address" required>

            <div class="fk-input-wrapper">
                <input type="password" id="login-password" class="fk-input" placeholder="Password" required>
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
