@extends('frontEnd.layouts.master')

@section('title', 'Error 404 - FinSphere Expo Kuwait')

@section('content')

    <!--=================== PAGE-TITLE ===================-->
    <div class="page-title" style="background-image: url(assets/frontend/img/bg-page-title.jpg);">
        <div class="container">
            <h1 class="title-line-left">Error 404</h1>
            <div class="breadcrumbs">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Error 404</li>
                </ul>
            </div>
        </div>
    </div>
    <!--================= PAGE-TITLE END =================-->

    <!--===================== S-ERROR =====================-->
    <section class="s-error" style="background-image: url(assets/frontend/img/effect-slide.svg);">
        <div class="container">
            <h2 class="title">4<span>0</span>4</h2>
            <p>Page Not Found</p>
            <a href="{{ url('/') }}" class="btn">Home</a>
        </div>
    </section>
    <!--=================== S-ERROR END ===================-->

@endsection
