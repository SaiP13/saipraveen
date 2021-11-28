@extends('home/includes/app')
@section('title', 'Sai Praveen')
@section('content')

    <!-- Header -->
    @include('home.includes.header')
    <!-- End Header -->

    <!-- Hero Section  -->
    <section id="hero">
      <section id="hero1">
      <div class="hero container">
        <div>
          <!-- <h1>Hello, <span></span></h1>
          <h1>My Name is <span></span></h1> -->
          <h1>Sai Praveen </span></h1>
          <a href="{{url('about')}}" type="button" class="cta">Web Developer</a>
        </div>
      </div>
      </section>
    </section>
    <!-- End Hero Section  -->

    <!-- Footer -->
    @include('home.includes.footer')
    <!-- End Footer -->

@endsection
