@extends('home/includes/app')
@section('title', 'About')
@section('content')

<!-- Header -->
@include('home.includes.header')
<!-- End Header -->

<!-- About Section -->
<section id="about">
    <div class="about container">
        <div class="col-left">
            <div class="about-img">
                <img src="{{url('images/about.jpg')}}" alt="img">
            </div>
        </div>
        <div class="col-right">
            <h1 class="section-title">About <span>me</span></h1>
            <h2>Back End Developer</h2>
            <p>Hello, I'm Sai Praveen.I have experience on HTML,CSS,PHP,Python,Flask and CodeIgniter!</p>
            <p>Graduted in Computer Science & Engineering.</p>
            <a href="#" class="cta">Download Resume</a>
        </div>
    </div>
</section>
<!-- End About Section -->
@include('home.includes.footer')
<!-- End Footer -->
@endsection
