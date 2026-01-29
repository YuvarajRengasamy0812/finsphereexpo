@extends('frontEnd.layouts.master')

@section('title', 'Reset Password - FinSphere Expo Kuwait')

@section('content')

<div class="fx-reset-wrapper">
    <div class="fx-reset-card">
        <h2 class="fx-reset-title">Reset Password</h2>
        <p class="fx-reset-subtitle">
            Create a new password for your account
        </p>

        <form class="fx-reset-form" method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="password" name="password" class="fx-reset-input" placeholder="New password" required>
            <input type="password" name="password_confirmation" class="fx-reset-input" placeholder="Confirm password" required>

            <button type="submit" class="fx-reset-btn">
                Reset Password
            </button>
        </form>

        <p class="fx-reset-switch">
            Back to
            <a href="{{ url('/login') }}">Sign in</a>
        </p>
    </div>
</div>

@endsection
