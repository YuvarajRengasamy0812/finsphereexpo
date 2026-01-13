@extends('frontEnd.layouts.master')

@section('title', 'Sign Up - FinSphere Expo Kuwait')

@section('content')
    <div class="fk-auth-wrapper">
        <div class="fk-auth-card">
            <h2 class="fk-auth-title">Create Account</h2>
            <p class="fk-auth-subtitle">Join FinSphere Expo</p>

            <form class="fk-auth-form">
                <input type="text" class="fk-input" placeholder="Full name" required>
                <input type="email" class="fk-input" placeholder="Email address" required>
                <input type="tel" class="fk-input" placeholder="Phone number" required>
                <input type="text" class="fk-input" placeholder="Location" required>

                <div class="fk-input-wrapper">
                    <input type="password" id="password" class="fk-input" placeholder="Password" required>
                    <i class="fa fa-eye fk-eye-toggle" data-target="password"></i>
                </div>

                <div class="fk-input-wrapper">
                    <input type="password" id="confirm-password" class="fk-input" placeholder="Confirm password" required>
                    <i class="fa fa-eye fk-eye-toggle" data-target="confirm-password"></i>
                </div>



                <button type="submit" class="fk-btn-primary">Register</button>
            </form>

            <p class="fk-switch">
                Already have an account?
                <a href="{{ url('/login') }}">Sign in</a>
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
