@extends('frontEnd.layouts.master')

@section('title', 'Exhibitors Booking - FinSphere Expo Kuwait')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
<script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<style>
    /* Optional custom styles for Toastify */
    .toastify {
        font-weight: bold;
    }
</style>
@section('content')

    <style>
        /* ===== Section ===== */
        .exhibitor-booking-section {
            padding: 80px 10px;
            background: #f9f9f9;
        }

        /* ===== Parent Card ===== */
        .exhibitor-booking-wrapper {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            border-top: 5px solid #976737;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            display: flex;
            overflow: hidden;
            /* removes all gaps */
        }

        /* ===== Left Image ===== */
        .exhibitor-booking-image {
            width: 45%;
            background-image: url("assets/frontend/img/exhibitor-booking.jpg");
            /* change image */
            background-size: cover;
            background-position: center;
        }

        /* ===== Right Form ===== */
        .exhibitor-booking-form {
            width: 55%;
            padding: 35px;
        }

        /* ===== Title ===== */
        .exhibitor-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 25px;
            background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* ===== Form ===== */
        .be-form {
            margin-top: 10px;
        }

        .be-field {
            margin-bottom: 16px;
        }

        .be-field label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 6px;
            color: #3E615D;
        }

        .be-field input,
        .be-field textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Focus */
        .be-field input:focus,
        .be-field textarea:focus {
            border-color: #976737;
            box-shadow: 0 0 0 2px rgba(151, 103, 55, 0.25);
            outline: none;
        }

        /* ===== Actions ===== */
        .be-actions {
            margin-top: 25px;
            text-align: right;
        }

        /* ===== Mobile Responsive ===== */
        @media (max-width: 768px) {
            .exhibitor-booking-wrapper {
                flex-direction: column;
            }

            .exhibitor-booking-image {
                width: 100%;
                height: 240px;
            }

            .exhibitor-booking-form {
                width: 100%;
                padding: 25px;
            }
        }
    </style>



    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">Exhibitors Booking</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Exhibitors Booking</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--================= EXHIBITOR BOOKING FORM =================-->
    <section class="exhibitor-booking-section">
        <div class="container">
            <div class="exhibitor-booking-wrapper">

                <!-- Left Image -->
                <div class="exhibitor-booking-image"></div>

                <!-- Right Form -->
                <div class="exhibitor-booking-form">
                    <h3 class="exhibitor-title">Become an Exhibitor</h3>
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
                    <form class="be-form" method="POST" action="{{ route('exhibitor.request.submit') }}">
    @csrf

    <div class="be-field">
        <label>Full Name</label>
        <input type="text" name="name" placeholder="Full name" required>
    </div>

    <div class="be-field">
        <label>Email Address</label>
        <input type="email" name="email" placeholder="Email" required>
    </div>

    <div class="be-field">
        <label>Phone Number</label>
        <input type="tel" name="phone" placeholder="+965" required>
    </div>

    <div class="be-field">
        <label>Company Name</label>
        <input type="text" name="company" placeholder="Company name" required>
    </div>

    <div class="be-field">
        <label>Designation</label>
        <input type="text" name="designation" placeholder="FinTech, Trading, AI">
    </div>

    <div class="be-field">
        <label>Brief Description</label>
        <textarea rows="3" name="description" placeholder="Tell us about your company"></textarea>
    </div>

    <div class="be-actions">
        <button type="submit" class="btn">Submit </button>
    </div>
</form>
                </div>

            </div>
        </div>
    </section>

    <!--================= EXHIBITOR BOOKING FORM END =================-->

@endsection
