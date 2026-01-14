@extends('frontEnd.layouts.master')

@section('title', 'Visitor Booking - FinSphere Expo Kuwait')

@section('content')

    <style>
        /* ===== Section ===== */
        .visitor-booking-section {
            padding: 80px 10px;
            background: #f9f9f9;
        }

        /* ===== Parent Card ===== */
        .visitor-booking-wrapper {
            max-width: 900px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            border-top: 5px solid #976737;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            display: flex;
            overflow: hidden;
            /* VERY IMPORTANT – removes gaps */
        }

        /* ===== Left Image ===== */
        .visitor-booking-image {
            width: 45%;
            background-image: url("assets/frontend/img/visitor-booking.jpg");
            /* change image */
            background-size: cover;
            background-position: center;
        }

        /* ===== Right Form ===== */
        .visitor-booking-form {
            width: 55%;
            padding: 35px;
        }

        /* ===== Title ===== */
        .visitor-title {
            text-align: center;
            font-weight: bold;
            margin-bottom: 25px;
            background: linear-gradient(to right, #c19a5f, #976737, #6b4a26);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* ===== Form ===== */
        .bv-form {
            margin-top: 10px;
        }

        .bv-field {
            margin-bottom: 16px;
        }

        .bv-field label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 6px;
            color: #3E615D;
        }

        .bv-field input {
            width: 100%;
            padding: 11px 14px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Focus */
        .bv-field input:focus {
            border-color: #976737;
            box-shadow: 0 0 0 2px rgba(151, 103, 55, 0.25);
            outline: none;
        }

        /* ===== Actions ===== */
        .bv-actions {
            margin-top: 25px;
            text-align: right;
        }

        /* ===== Mobile Responsive ===== */
        @media (max-width: 768px) {
            .visitor-booking-wrapper {
                flex-direction: column;
            }

            .visitor-booking-image {
                width: 100%;
                height: 220px;
            }

            .visitor-booking-form {
                width: 100%;
                padding: 25px;
            }
        }
    </style>



    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">Visitor Booking</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Visitor Booking</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--================= VISITOR BOOKING FORM =================-->
    <section class="visitor-booking-section">
        <div class="container">
            <div class="visitor-booking-wrapper">

                <!-- Left Image -->
                <div class="visitor-booking-image"></div>

                <!-- Right Form -->
                <div class="visitor-booking-form">
                    <h3 class="visitor-title">Free Visitor Pass</h3>

                    <form class="bv-form">
                        <div class="bv-field">
                            <label>Full Name</label>
                            <input type="text" placeholder="Enter your name" required>
                        </div>

                        <div class="bv-field">
                            <label>Email Address</label>
                            <input type="email" placeholder="Enter your email" required>
                        </div>

                        <div class="bv-field">
                            <label>Phone Number</label>
                            <input type="tel" placeholder="+965" required>
                        </div>

                        {{-- <div class="bv-field">
                            <label>Visit Date</label>
                            <input type="date" required>
                        </div> --}}

                        <div class="bv-actions">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!--================= VISITOR BOOKING FORM END =================-->

@endsection
