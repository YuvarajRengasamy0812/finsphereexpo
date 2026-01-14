@extends('frontEnd.layouts.master')

@section('title', 'Speaker Booking - FinSphere Expo Kuwait')

@section('content')
    <style>
        /* ===== Section ===== */
        .speaker-booking-section {
            padding: 80px 10px;
            background: #f9f9f9;
        }

        /* ===== Parent Card ===== */
        .speaker-booking-wrapper {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            border-top: 5px solid #976737;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            display: flex;
            overflow: hidden;
            /* removes gaps */
        }

        /* ===== Left Image ===== */
        .speaker-booking-image {
            width: 45%;
            background-image: url("assets/frontend/img/speaker-booking.jpg");
            /* change image */
            background-size: cover;
            background-position: center;
        }

        /* ===== Right Form ===== */
        .speaker-booking-form {
            width: 55%;
            padding: 35px;
        }

        /* ===== Title ===== */
        .speaker-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 25px;
            background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* ===== Form ===== */
        .bs-form {
            margin-top: 10px;
        }

        .bs-field {
            margin-bottom: 16px;
        }

        .bs-field label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 6px;
            color: #3E615D;
        }

        .bs-field input,
        .bs-field textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Focus */
        .bs-field input:focus,
        .bs-field textarea:focus {
            border-color: #976737;
            box-shadow: 0 0 0 2px rgba(151, 103, 55, 0.25);
            outline: none;
        }

        /* ===== Actions ===== */
        .bs-actions {
            margin-top: 25px;
            text-align: right;
        }

        /* ===== Mobile Responsive ===== */
        @media (max-width: 768px) {
            .speaker-booking-wrapper {
                flex-direction: column;
            }

            .speaker-booking-image {
                width: 100%;
                height: 240px;
            }

            .speaker-booking-form {
                width: 100%;
                padding: 25px;
            }
        }
    </style>


    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">Speaker Booking</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Speaker Booking</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--================= SPEAKER BOOKING FORM =================-->
    <section class="speaker-booking-section">
        <div class="container">
            <div class="speaker-booking-wrapper">

                <!-- Left Image -->
                <div class="speaker-booking-image"></div>

                <!-- Right Form -->
                <div class="speaker-booking-form">
                    <h3 class="speaker-title">Become a Speaker</h3>

                    <form class="bs-form">
                        <div class="bs-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Your name" required>
                        </div>

                        <div class="bs-field">
                            <label>Email Address</label>
                            <input type="email" placeholder="Your email" required>
                        </div>

                        <div class="bs-field">
                            <label>Company / Organization</label>
                            <input type="text" placeholder="Company name">
                        </div>

                        <div class="bs-field">
                            <label>Topic Expertise</label>
                            <input type="text" placeholder="e.g. FinTech, AI, Blockchain">
                        </div>

                        <div class="bs-field">
                            <label>Brief Description</label>
                            <textarea rows="3" placeholder="Tell us about your experience"></textarea>
                        </div>

                        <div class="bs-actions">
                            <button type="submit" class="btn">Apply Now</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!--================= SPEAKER BOOKING FORM END =================-->

@endsection
