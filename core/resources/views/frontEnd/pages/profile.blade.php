@extends('frontEnd.layouts.master')

@section('title', 'Profile - FinSphere Expo Kuwait')

@section('content')

    <style>
        /* ===== Wrapper ===== */
        .fkp-profile-wrapper {
            max-width: 1000px;
            margin: 40px auto;
            font-family: 'Poppins', sans-serif;
        }

        /* ===== Top Tabs ===== */
        .fkp-tabs {
            display: flex;
            border-bottom: 2px solid #ddd;
            margin-bottom: 30px;
            gap: 20px;
        }

        .fkp-tab {
            padding: 12px 25px;
            cursor: pointer;
            font-weight: 600;
            border-radius: 10px 10px 0 0;
            transition: 0.3s;
            background: #f7f7f7;
            color: #3E615D;
        }

        .fkp-tab.active {
            background: linear-gradient(135deg, #976737, #3E615D);
            color: #fff;
        }

        /* ===== Cards ===== */
        .fkp-card {
            background: #fff;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.05);
        }

        .fkp-card-title {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 30px;
            color: #3E615D;
        }

        /* ===== Avatar ===== */
        /* Avatar wrapper */
        .fkp-avatar-wrapper {
            position: relative;
            display: inline-block;
        }

        /* Avatar image */
        .fkp-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #976737;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Hide file input */
        .fkp-avatar-input {
            display: none;
        }

        /* Edit icon overlay */
        .fkp-avatar-edit {
            position: absolute;
            bottom: 0;
            right: 0;
            background: #fff;
            width: 30px;
            height: 30px;
            padding: 5px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: 0.3s;
            border: 2px solid #976737;
        }

        .fkp-avatar-edit i {
            color: #976737 !important;
            width: 18px;
            height: 18px;
        }

        /* Hover effect */
        .fkp-avatar-edit:hover {
            background: #fff;
            transform: scale(1.1);
        }


        /* ===== Form ===== */
        .fkp-profile-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .fkp-form-row {
            display: flex;
            flex-direction: column;
        }

        .fkp-form-row label {
            font-weight: 600 !important;
            color: #3E615D !important;
            margin-bottom: 6px !important;
        }

        .fkp-input,
        .fkp-textarea {
            padding: 12px 15px !important;
            border-radius: 12px !important;
            border: 1px solid #ddd !important;
            font-size: 15px !important;
            transition: 0.3s !important;
        }

        .fkp-input:focus,
        .fkp-textarea:focus {
            border-color: #976737 !important;
            box-shadow: 0 0 0 2px rgba(151, 103, 55, 0.2) !important;
            outline: none !important;
        }

        .fkp-textarea {
            resize: vertical !important;
        }

        /* ===== Buttons ===== */
        .fkp-btn {
            padding: 12px 20px;
            border-radius: 14px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: 0.25s;
        }

        .fkp-btn-primary {
            background: linear-gradient(135deg, #976737, #3E615D);
            color: #fff;
        }

        .fkp-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.15);
        }

        /* ===== Tab Content ===== */
        .fkp-tab-content {
            display: none;
            animation: fkp-fade 0.3s ease;
        }

        .fkp-tab-content.active {
            display: block;
        }

        @keyframes fkp-fade {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        /* ===== Responsive ===== */
        @media (max-width: 768px) {
            .fkp-tabs {
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>

    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">My Profile</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Profile</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="fkp-profile-wrapper">
        <!-- Top Tabs -->
        <div class="fkp-tabs">
            <div class="fkp-tab active" data-tab="profile">My Profile</div>
            <div class="fkp-tab" data-tab="booths">Booths</div>
            <div class="fkp-tab" data-tab="speakers">Speakers</div>
            <div class="fkp-tab" data-tab="exhibitors">Exhibitors</div>
            <div class="fkp-tab" data-tab="visitor-pass">Visitor Pass</div>
        </div>

        <!-- Profile Content -->
        <div class="fkp-tab-content active" id="profile">
            <div class="fkp-card">
                <h2 class="fkp-card-title">My Profile</h2>

                <div class="fkp-avatar-wrapper">
                    <img src="{{ asset('assets/frontend/img/profile.png') }}" alt="Profile Picture" class="fkp-avatar">
                    <input type="file" class="fkp-avatar-input" id="fkp-avatar-input">
                    <!-- Edit icon overlay -->
                    <label for="fkp-avatar-input" class="fkp-avatar-edit">
                        <i data-lucide="edit-2"></i>
                    </label>
                </div>


                <form class="fkp-profile-form">
                    <div class="fkp-form-row">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="fkp-input" value="John Doe" disabled>
                    </div>
                    <div class="fkp-form-row">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="fkp-input" value="john@example.com" disabled>
                    </div>
                    <div class="fkp-form-row">
                        <label for="company">Company</label>
                        <input type="text" id="company" class="fkp-input" value="FinSphere Expo" disabled>
                    </div>
                    <div class="fkp-form-row">
                        <label for="mobile">Mobile Number</label>
                        <input type="text" id="mobile" class="fkp-input" value="+965 5222 2347" disabled>
                    </div>
                    <div class="fkp-form-row">
                        <label for="country">Country</label>
                        <input type="text" id="country" class="fkp-input" value="Kuwait" disabled>
                    </div>
                    <div class="fkp-form-row">
                        <label for="about">About</label>
                        <textarea id="about" class="fkp-textarea" rows="5">I am a professional exhibitor with experience in …</textarea>
                    </div>

                    <button type="submit" class="fkp-btn fkp-btn-primary">Save Changes</button>
                </form>
            </div>
        </div>

        <!-- Booths Content -->
        <div class="fkp-tab-content" id="booths">
            <div class="fkp-card">
                <h2 class="fkp-card-title">My Booths</h2>
                <p>No booths added yet.</p>
            </div>
        </div>
        <!-- Speakers Content -->
        <div class="fkp-tab-content" id="speakers">
            <div class="fkp-card">
                <h2 class="fkp-card-title">Speaker</h2>
                <p>you have not added any speakers.</p>
            </div>
        </div>
        <!-- Exhibitors Content -->
        <div class="fkp-tab-content" id="exhibitors">
            <div class="fkp-card">
                <h2 class="fkp-card-title">Exhibitor</h2>
                <p>you have not added any exhibitors.</p>
            </div>
        </div>
        <!-- Visitor Pass Content -->
        <div class="fkp-tab-content" id="visitor-pass">
            <div class="fkp-card">
                <h2 class="fkp-card-title">Visitor Pass</h2>
                <p>you have not booked any visitor pass.</p>
            </div>
        </div>
    </div>

    <script>
        const fkpTabs = document.querySelectorAll('.fkp-tab');
        const fkpContents = document.querySelectorAll('.fkp-tab-content');

        fkpTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                fkpTabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                const target = tab.getAttribute('data-tab');
                fkpContents.forEach(c => c.classList.remove('active'));
                document.getElementById(target).classList.add('active');
            });
        });
    </script>

@endsection
