<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <!-- Site Metas -->
    <title>Food Funday Restaurant - One page HTML Responsive</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{asset('frontendtheme/images/favicon.ico')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('frontendtheme/images/apple-touch-icon.png')}}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontendtheme/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('frontendtheme/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('frontendtheme/css/responsive.css')}}">
    <!-- color -->
    <link id="changeable-colors" rel="stylesheet" href="{{asset('frontendtheme/css/colors/orange.css')}}" />
    @yield('css')
    <style>
        .text-danger {
            color: red;
        }
    </style>
    <!-- Modernizer -->
    <script src="{{asset('frontendtheme/js/modernizer.js')}}"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="loader">
        <div id="status"></div>
    </div>
    <div id="site-header">
        <header id="header" class="header-block-top">
            <div class="container">
                <div class="row">
                    <div class="main-menu">
                        <!-- navbar -->
                        <nav class="navbar navbar-default" id="mainNav">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div class="logo">
                                    <a class="navbar-brand js-scroll-trigger logo-header" href="/">
                                        <img src="{{asset('frontendtheme/images/logo.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{url('/#banner')}}">Home</a></li>
                                    <li class="{{ request()->is('/#about') ? 'active' : '' }}"><a href="{{url('/#about')}}">About us</a></li>
                                    <li><a href="{{url('/#menu')}}">Menu</a></li>
                                    <li><a href="{{url('/#our_team')}}">Team</a></li>
                                    <li><a href="{{url('/#gallery')}}">Gallery</a></li>
                                    <li><a href="{{url('/#blog')}}">Blog</a></li>
                                    <li><a href="{{url('/#pricing')}}">pricing</a></li>
                                    <li><a href="{{url('/#reservation')}}">Reservaion</a></li>
                                    <li><a href="{{url('/#footer')}}">Contact us</a></li>
                                    <!-- <li class="{{ request()->is('privacy') ? 'active' : '' }}"><a href="{{url('/privacy')}}">Privacy Policy</a></li> -->
                                    @if (Route::has('login'))
                                        @auth
                                        <li class="{{ request()->is('dashboard') ? 'active' : '' }}"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                        @else
                                        <li class="{{ request()->is('login') ? 'active' : '' }}"><a href="{{ route('login') }}">Log in</a></li>
                                        @if (Route::has('register'))
                                        <li class="{{ request()->is('register') ? 'active' : '' }}"><a href="{{ route('register') }}">Register</a></li>
                                        @endif
                                        @endauth
                                    @endif
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>

    @include('message.flash-message')

    @yield('content')

    <div id="footer" class="footer-main">

        <div class="team-main pad-top-100 pad-bottom-100 parallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                            <h2 class="block-title text-center">
                                Contact Us
                            </h2>
                        </div>
                        <div class="container" data-aos="fade-up">
                            <div class="row mt-5">
                                <div class="col-lg-2">
                                </div>
                                <div class="col-lg-8 mt-5 mt-lg-0">
                                    <!-- <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm" role="form" class="php-email-form"> -->
                                    <form id="contactUSForm" role="form" class="php-email-form">
                                        <!-- {{ csrf_field() }} -->
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{ old('name') }}">
                                                @if ($errors->has('name'))
                                                <span id="nameErrorMsg" class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>

                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="email" class="form-control" name="email" id="emailid" placeholder="Your Email" value="{{ old('email') }}">
                                                @if ($errors->has('email'))
                                                <span id="emailErrorMsg" class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <input type="text" class="form-control" name="phone" id="phoneid" placeholder="Phone No." value="{{ old('phone') }}">
                                                <span id="phoneErrorMsg" class="text-danger">{{ $errors->first('phone') }}</span>
                                                @if ($errors->has('phone'))
                                                <span id="phoneErrorMsg" class="text-danger">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>

                                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                                <input type="text" class="form-control" name="subject" id="subjectid" placeholder="Subject" value="{{ old('subject') }}">
                                                @if ($errors->has('subject'))
                                                <span id="subjectErrorMsg" class="text-danger">{{ $errors->first('subject') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group mt-3">
                                            <textarea class="form-control" id="messageid" name="message" rows="5" placeholder="Message">{{ old('message') }}</textarea>
                                            @if ($errors->has('message'))
                                            <span id="messageErrorMsg" class="text-danger">{{ $errors->first('message') }}</span>
                                            @endif
                                        </div>
                                        <div class="my-3">
                                            @if(Session::has('success'))
                                            <div class="alert alert-success">
                                                {{Session::get('success')}}
                                            </div>
                                            @endif
                                        </div>
                                        <div class="alert alert-success" role="alert" id="successMsg" style="display: none">
                                            Thank you for getting in touch!
                                        </div>
                                        <div class="alert alert-failure" role="alert" id="errorMsg" style="display: none; background-color: #cda95c;" >
                                        
                                        </div>
                                        <div class="text-center"><button id="submitbutton" type="submit">Send Message</button></div>
                                    </form>
                                </div>
                                <div class="col-lg-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-box pad-top-70">
            <div class="container">
                <div class="row">
                    <div class="footer-in-main">
                        <div class="footer-logo">
                            <div class="text-center">
                                <img src="{{asset('frontendtheme/images/logo.png')}}" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-a">
                                <h3>About Us</h3>
                                <p>Aenean commodo ligula eget dolor aenean massa. Cum sociis nat penatibu set magnis dis parturient montes.</p>
                                <ul class="socials-box footer-socials pull-left">
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa  fa-facebook"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-twitter"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-google-plus"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-pinterest"></i></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="social-circle-border"><i class="fa fa-linkedin"></i></div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-b">
                                <h3>New Menu</h3>
                                <ul>
                                    <li><a href="#">Italian Bomba Sandwich</a></li>
                                    <li><a href="#">Double Dose of Pork Belly</a></li>
                                    <li><a href="#">Spicy Thai Noodles</a></li>
                                    <li><a href="#">Triple Truffle Trotters</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-c">
                                <h3>Contact Us</h3>
                                <p>
                                    <i class="fa fa-map-signs" aria-hidden="true"></i>
                                    <span>6 E Esplanade, St Albans VIC 3021, Australia</span>
                                </p>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i>
                                    <span>
                                        +91 80005 89080
                                    </span>
                                </p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span><a href="#">support@foodfunday.com</a></span>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box-d">
                                <h3>Opening Hours</h3>
                                <ul>
                                    <li>
                                        <p>Monday - Thursday </p>
                                        <span> 11:00 AM - 9:00 PM</span>
                                    </li>
                                    <li>
                                        <p>Friday - Saturday </p>
                                        <span> 11:00 AM - 5:00 PM</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="copyright" class="copyright-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h6 class="copy-title"> Copyright &copy; 2018 Food Funday is powered by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a> </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="scrollup" style="display: none;">Scroll</a>
    <section id="color-panel" class="close-color-panel">
        <a class="panel-button gray2"><i class="fa fa-cog fa-spin fa-2x"></i></a>
        <!-- Colors -->
        <div class="segment">
            <h4 class="gray2 normal no-padding">Color Scheme</h4>
            <a title="orange" class="switcher orange-bg"></a>
            <a title="strong-blue" class="switcher strong-blue-bg"></a>
            <a title="moderate-green" class="switcher moderate-green-bg"></a>
            <a title="vivid-yellow" class="switcher vivid-yellow-bg"></a>
        </div>
    </section>

    <!-- ALL JS FILES -->
    <script src="{{asset('frontendtheme/js/all.js')}}"></script>
    <script src="{{asset('frontendtheme/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('frontendtheme/js/custom.js')}}"></script>

    <script type="text/javascript">
        $('#contactUSForm').on('submit', function(e) {
            e.preventDefault();
            $('#submitbutton').html('Sending..');
            
            let name = $('#name').val();
            let email = $('#emailid').val();
            let phone = $('#phoneid').val();
            let subject = $('#subjectid').val();
            let message = $('#messageid').val();

            $.ajax({
                url: "{{ route('contact.us.store') }}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    email: email,
                    phone: phone,
                    subject: subject,
                    message: message,
                },
                success: function(response) {
                    $('#contactUSForm').trigger("reset");
                    $('#submitbutton').html('Send Message');
                    var x = document.getElementById("errorMsg");
                    x.style.display = "none";
                    $('#successMsg').show();
                    $('#phoneErrorMsg').text('');
                    console.log(response);
                },
                error: function(response) {
                    $('#submitbutton').html('Send Message');
                    $('#phoneErrorMsg').text('');
                    var x = document.getElementById("successMsg");
                    x.style.display = "none";
                    $('#errorMsg').show();
                    $('#nameErrorMsg').text(response.responseJSON.errors.name);
                    $('#emailErrorMsg').text(response.responseJSON.errors.email);
                    $('#phoneErrorMsg').text(response.responseJSON.errors.phone);
                    $('#subjectErrorMsg').text(response.responseJSON.errors.subject);
                    $('#messageErrorMsg').text(response.responseJSON.errors.message);
                    var msg = response.responseJSON.errors;
                    var errorString = '<ul>';
                    $.each( msg, function( key, value) {
                        errorString += '<li>' + value + '</li>';
                    });
                    errorString += '</ul>';
                    var div = document.getElementById('errorMsg');
                    div.innerHTML = errorString;
                },
            });
        });
    </script>
</body>

</html>