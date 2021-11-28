@extends('home/includes/app')
@section('title', 'Blogs')
@section('content')

<!-- Header -->
@include('home.includes.header')
<!-- End Header -->

<section id="services">
    <div class="services container">
        <div class="service-top">
            <h1 class="section-title">Bl<span>o</span>gs</h1>
            <p>---My Blogs--- </p>
        </div>
        <div class="service-bottom">
            <div class="service-item">
                <a href="#">
                    <div class="icon"><img src="{{url('images/php.png')}}" /></div>
                    <h2>PHP</h2><br>
                </a>
            </div>

            <div class="service-item">
                <a href="#">
                    <div class="icon"><img src="{{url('images/python.png')}}" /></div>
                    <h2>Python</h2>
                    <p></p>
                </a>
            </div>
            <div class="service-item">
                <a href="#">
                    <div class="icon"><img src="{{url('images/htmlcss.png')}}" /></div>
                    <h2>HTML & CSS</h2>
                    <p> </p>
                </a>
            </div>
            <div class="service-item">
                <a href="#">
                    <div class="icon"><img src="{{url('images/mysql.png')}}" /></div>
                    <h2>My Sql</h2>
                    <p></p>
                </a>
            </div>
            <div class="service-item">
                <a href="#">
                    <div class="icon"><img src="{{url('images/codeigniter.png')}}" /></div>
                    <h2>CodeIgniter</h2>
                    <p></p>
                </a>
            </div>
            <div class="service-item">
                <a href="#">
                    <div class="icon"><img src="{{url('images/flask.png')}}" /></div>
                    <h2>Python Flask</h2>
                    <p></p>
                </a>
            </div>
        </div>
    </div>
</section>

@include('home.includes.footer')
<!-- End Footer -->
@endsection
