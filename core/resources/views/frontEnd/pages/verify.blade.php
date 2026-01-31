@extends('frontEnd.layouts.master')

@section('title', 'Verify Email - FinSphere Expo Kuwait')

@section('content')

<div class="fk-forgot-wrapper">
    <div class="fk-forgot-container">

        <div class="fk-forgot-grid" style="justify-content: center;">
            {{-- CENTERED CARD --}}
            <div class="fk-forgot-card" style="max-width: 500px; text-align:center;">

                <!-- ICON -->
                <div style="display:flex; justify-content:center; margin-bottom:20px;">
                    <i data-lucide="mail-check" style="width:60px; height:60px; color:#e85a3c;"></i>
                </div>

                <h2 class="fk-forgot-title">Verify Your Email</h2>

                <p class="fk-forgot-subtitle">
                    We have sent a verification link to your registered email address.
                    Please check your inbox and verify your email to continue.
                </p>

                {{-- SUCCESS MESSAGE --}}
                @if (session('status') == 'verification-link-sent')
                    <p style="color:green; font-weight:600; margin-bottom:15px;">
                        A new verification link has been sent to your email.
                    </p>
                @endif

                <!-- RESEND BUTTON -->
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div style="display:flex; justify-content:center; margin-top:20px;">
                        <button type="submit" class="fk-forgot-btn">
                            Resend Verification Email
                        </button>
                    </div>
                </form>

                <p class="fk-forgot-switch" style="margin-top:20px;">
                    Already verified?
                    <a href="{{ url('/login') }}">Sign in</a>
                </p>

            </div>
        </div>

    </div>
</div>

<script>
    lucide.createIcons();
</script>

@endsection
