@extends('frontEnd.layouts.master')

@section('title', 'Forgot Password - FinSphere Expo Kuwait')

@section('content')

<div class="fk-auth-wrapper">
    <div class="fk-auth-card">
        <h2 class="fk-auth-title">Reset Password</h2>
        <p class="fk-auth-subtitle">
            Create a new password for your account
        </p>

        <form class="fk-auth-form">
            <input type="password" class="fk-input" placeholder="New password" required>
            <input type="password" class="fk-input" placeholder="Confirm password" required>

            <button type="submit" class="fk-btn-primary">
                Reset Password
            </button>
        </form>

        <p class="fk-switch">
            Back to
            <a href="{{ url('/login') }}">Sign in</a>
        </p>
    </div>
</div>


@endsection