@extends('home/includes/app')
@section('title', 'Contact')
@section('content')

<!-- Header -->
@include('home.includes.header')
<!-- End Header -->

<section id="contact">
    <div class="contact container">
        <div>
            <h1 class="section-title">Contact <span>Me</span></h1>
        </div>
        <div class="contact-items">
            <div class="contact-item">
                <div class="icon"><img src="{{url('images/phone.png')}}" /></div>
                <div class="contact-info">
                    <h1>Phone</h1>
                    <h2>+91 810 635 5694 </h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="{{url('images/new-post.png')}}" /></div>
                <div class="contact-info">
                    <h1>Email</h1>
                    <h2>chsai.p13@gmail.com</h2>
                </div>
            </div>
            <div class="contact-item">
                <div class="icon"><img src="{{url('images/map-marker.png')}}" /></div>
                <div class="contact-info">
                    <h1>Address</h1>
                    <h2>Razole, Andhra Pradhesh, India</h2>
                </div>
            </div>
        </div>
    </div>
</section>

@include('home.includes.footer')
@endsection
