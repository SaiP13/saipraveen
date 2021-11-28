@extends('home/includes/app')
@section('title', 'Contact')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<!-- Header -->
@include('home.includes.header')
<!-- End Header -->

<section id="contact">
    <div class="contact container">
        <div>
            <h2 class="section-title">Contact <span>Me</span></h2>
        </div>
        <br><br><br>
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
<section class="px-8 py-10">
    <main class="max-w-10xl mx-auto mt-8 lg:mt-20 space-y-8">
        <div class="flex items-center justify-center min-h-screen bg-gray-200">
            <div class="w-full px-8 py-16 bg-white rounded-lg shadow-2xl lg:w-2/5">
                <h2 class="mb-4 text-xl antialiased font-semibold text-center text-gray-800">Send Us Message</h2>
                <form id="sendus_form" class="mx-8 space-y-8">
                    <div>
                        <input type="text" id="full_name" name="full_name" class="w-full p-2 text-sm border-b-2 border-gray-400 outline-none opacity-50 focus:border-blue-400"
                            placeholder="Full Name *" />
                    </div>
                    <div>
                        <input type="text"
                            class="w-full p-2 text-sm border-b-2 border-gray-400 outline-none opacity-50 focus:border-blue-400"
                            placeholder="Your Email *" />
                        {{-- <span class="text-xs text-red-600">Email field required</span> --}}
                    </div>
                    <div>
                        <input type="text"
                            class="w-full p-2 text-sm border-b-2 border-gray-400 outline-none opacity-50 focus:border-blue-400"
                            placeholder="Subject *" />
                    </div>
                    <div>
                        <textarea name="message" class="w-full p-6 text-sm border-b-2 border-gray-400 rounded-lg outline-none opacity-50 focus:border-blue-400" placeholder="Enter your message *"></textarea>
                    </div>

                    <button type="submit" id="sendus_submit" class="block w-full px-2 py-4 mt-2 text-white bg-black rounded-full">Send Form</button>
                </form>
            </div>
        </div>
    </main>
</section>
<section class="px-6 py-8">
    <main class="max-w-8xl mx-auto mt-6 lg:mt-20 space-y-6">
        <footer class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            <img src="./images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">
                    <div id="subscribe_form" class="lg:flex text-sm">

                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="./images/mailbox-icon.svg" alt="mailbox letter">
                            </label>
                            <input id="subscribe_email" type="email" placeholder="Your email address" class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
                        </div>

                        <button type="submit" id="subscribe_submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8">
                            Subscribe
                        </button>
                    </div>
                </div>

            </div>
        </footer>

    </main>
</section>
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), }
        });
        $('#subscribe_submit').click(function(){
            var email = $('#subscribe_email').val();
            $.ajax({
                url: "{{ url('admin/store-subscribers')}}",
                type: 'post',
                dataType: 'json',
                data: {email:email},
                success: function(data) {

                    if(data.errors){

                        swal({
                            title: "Info",
                            text: "Please Enter Your Email!",
                            type: "error",
                        });
                    } else {
                        swal({
                            title: "Info",
                            text: "Invalide Credintials!",
                            type: "error",
                        });
                    }

                }

            });
        });
    });
</script>

@include('home.includes.footer')
@endsection

