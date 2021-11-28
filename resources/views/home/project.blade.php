@extends('home/includes/app')
@section('title', 'Projects')
@section('content')
<!-- Header -->
@include('home.includes.header')
<!-- End Header -->

<section id="projects">
    <div class="projects container">
        <div class="projects-header">
            <h1 class="section-title">Pro<span>je</span>cts</h1>
        </div>
        <div class="all-projects">

            <div class="project-item">
                <div class="project-info">
                    <h1>E-COMMERCE WEBSITE</h1>
                    <h2>Core PHP</h2>
                    <p>Update soon...</p>
                </div>
                <div class="project-img">
                    <img src="{{url('images/img-1.png')}}" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>STUDENT MANAGEMENT</h1>
                    <h2>Core PHP</h2>
                    <p>Update soon...</p>
                </div>
                <div class="project-img">
                    <img src="{{url('images/img-1.png')}}" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>B.TECH PROJECT</h1>
                    <h2>Machine Learning</h2>
                    <p>Update soon...</p>
                </div>
                <div class="project-img">
                    <img src="{{url('images/img-1.png')}}" alt="img">
                </div>
            </div>
            <div class="project-item">
                <div class="project-info">
                    <h1>DIPLOMA PROJECT</h1>
                    <h2>Internet Of Things</h2>
                    <p>Update soon...</p>
                </div>
                <div class="project-img">
                    <img src="{{url('images/img-1.png')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>

@include('home.includes.footer')
<!-- End Footer -->
@endsection
