@extends('home/includes/app')
@section('title', 'Blogs')
@section('content')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    .product:hover .gradient {
        opacity: 1;
        height: 100%;
    }

    .product .gradient {
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
        position: absolute;
        width: 100%;
        height: 0;
        left: 0;
        bottom: 0;
        z-index: -1;
        background: #0a0808;
        background: -moz-linear-gradient(to bottom, rgba(51, 137, 255, 1) 0%, rgba(109, 51, 255, 1) 100%);
        background: -webkit-linear-gradient(to bottom, rgba(51, 137, 255, 1) 0%, rgba(109, 51, 255, 1) 100%);
        background: linear-gradient(to bottom, rgba(51, 137, 255, 1) 0%, rgba(109, 51, 255, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0a0808', endColorstr='#ff0013', GradientType=0);
        opacity: 0;
    }

    .product:after {
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        -webkit-transform: translate3d(-50%, 0, 0);
        -moz-transform: translate3d(-50%, 0, 0);
        transform: translate3d(-50%, 0, 0);
        -o-transform: translate3d(-50%, 0, 0);
        background-color: #fff;
        width: 4px;
        height: 0;
    }

</style>
<!-- Header -->
@include('home.includes.header')
<!-- End Header -->


        <div class="container">
            <div></div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="product ">
                        <div class="gradient"></div>
                        <img src="http://www.webcoderskull.com/img/services/htmlcsspsd.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product ">
                        <div class="gradient"></div>
                        <img src="http://www.webcoderskull.com/img/services/graphic-design.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product ">
                        <div class="gradient"></div>
                        <img src="http://www.webcoderskull.com/img/services/php-mysql.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="product ">
                        <div class="gradient"></div>
                        <img src="http://www.webcoderskull.com/img/services/php-mysql.png" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>




@include('home.includes.footer')
<!-- End Footer -->
@endsection
