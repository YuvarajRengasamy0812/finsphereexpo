@extends('frontEnd.layouts.master')
@section('title', 'Forgot Password - FinSphere Expo Kuwait')

@section('content')
<div class="fk-forgot-wrapper">
    <div class="fk-forgot-container">
        <div class="fk-forgot-grid" style="justify-content: center;">
            <div class="fk-forgot-card" style="max-width: 500px;">
                <h2 class="fk-forgot-title">Forgot Password</h2>
                <p class="fk-forgot-subtitle">Enter your email and we’ll send a reset link</p>

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                <form class="fk-forgot-form" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="fk-forgot-row">
                        <input type="email" name="email" class="fk-forgot-input" placeholder="Email address" required>
                    </div>

                    <div style="display: flex; justify-content: center;">
                        <button type="submit" class="fk-forgot-btn">Send Reset Link</button>
                    </div>
                </form>

                <p class="fk-forgot-switch" style="text-align: center; margin-top: 15px;">
                    Remembered your password? <a href="{{ url('/login') }}">Sign in</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
