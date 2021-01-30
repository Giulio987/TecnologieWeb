@extends('layouts.app')

@section('content')  
	<!-- Page Content -->
	<div class="container">

	<!-- Heading Row -->
	<div class="row align-items-center my-5">
		<div class="col-lg-7">
		<img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt="">
		</div>
		<!-- /.col-lg-8 -->
		<div class="col-lg-5">
		<h1 class="font-weight-light">MyDoctor</h1>
		<p>MyDoctor è una startup innovaticva che ........</p>
		<a class="btn btn-primary" href="#">Call to Action!</a>
		</div>
		<!-- /.col-md-4 -->
	</div>
	<!-- /.row -->

	<!-- Call to Action Well -->
	<div class="card text-white bg-secondary my-5 py-4 text-center">
		<div class="card-body">
		<p class="text-white m-0">This call to action card is a great place to showcase some important information or display a clever tagline!</p>
		</div>
	</div>

	<!-- Content Row -->
	<div class="row">
		<div class="col-md-4 mb-5">
		<div class="card h-100">
			<div class="card-body">
			<h2 class="card-title">Card One</h2>
			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
			</div>
			<div class="card-footer">
			<a href="#" class="btn btn-primary btn-sm">More Info</a>
			</div>
		</div>
		</div>
		<!-- /.col-md-4 -->
		<div class="col-md-4 mb-5">
		<div class="card h-100">
			<div class="card-body">
			<h2 class="card-title">Card Two</h2>
			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
			</div>
			<div class="card-footer">
			<a href="#" class="btn btn-primary btn-sm">More Info</a>
			</div>
		</div>
		</div>
		<!-- /.col-md-4 -->
		<div class="col-md-4 mb-5">
		<div class="card h-100">
			<div class="card-body">
			<h2 class="card-title">Card Three</h2>
			<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
			</div>
			<div class="card-footer">
			<a href="#" class="btn btn-primary btn-sm">More Info</a>
			</div>
		</div>
		</div>
		<!-- /.col-md-4 -->

	</div>
	<!-- /.row -->

	</div>
	<!-- /.container -->
@endsection

<!--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <-- Fonts --
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <-- Styles --
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Multiple Authentication in Laravel 6/7
                </div>

                <div class="links">
                    <a href="{{route('admin_register')}}">Admin Register</a> questo puo andare anche tolto
                    <a href="{{route('admin_login')}}">Admin Login</a>
                    <a href="{{route('doctor_register')}}">Doctor Register</a>
                    <a href="{{route('doctor_login')}}">Doctor Login</a>
                    <a href="{{route('register')}}">User Register</a>
                    <a href="{{route('login')}}">User Login</a>
                </div>
            </div>
        </div>
    </body>
</html> -->