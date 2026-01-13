@extends('frontEnd.layouts.master')

@section('title', 'Forgot Password - FinSphere Expo Kuwait')

@section('content')

<div class="fk-auth-wrapper">
    <div class="fk-auth-card">
        <h2 class="fk-auth-title">Forgot Password</h2>
        <p class="fk-auth-subtitle">
            Enter your email and we’ll send a reset link
        </p>

        <form class="fk-auth-form">
            <input type="email" class="fk-input" placeholder="Email address" required>

            <button type="submit" class="fk-btn-primary">
                Send Reset Link
            </button>
        </form>

        <p class="fk-switch">
            Remembered your password?
            <a href="{{ url('/login') }}">Sign in</a>
        </p>
    </div>
</div>

@endsection