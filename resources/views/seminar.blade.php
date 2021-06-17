<!DOCTYPE html>
<html>
	<head>
		<title> SeminarPage</title>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
		<link rel = "stylesheet" type = "text/css" href = "css/seminarStyle.css">
		<!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>

        <!----------------------link google font for body------------------------->
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- Body-->
    <style>
        body{
            font-family: 'Frank Ruhl Libre', serif;
        }
          .dropdown-menu a:hover {
          color: #1608d4 !important;
         }
         a:hover {
            color:#1608d4 !important;
         }

         .nav-item{
             margin-left:10px;
         }
         .navbar-toggler{
             color:#03fce3;
         }
         .navbar{
                padding:.8rem;
            }
            .navbar-nav{
                padding-right:20px;

            }
            .nav-link{
                font-size: 1.1em !important;
            }
            h1, h2, h3, h4, h5, h6, a, i, p {
                font-family: "Raleway", sans-serif;
            }
        .page-section img{
            width:100%;
            height:100%;
        }
        .photos{
            margin-top:20px;
            background-color: #080624;
            opacity: 0.9;
        }
        .inside-photo{
            height: auto;
            margin-top:20px;
            margin-bottom: 20px;
            background-color: #080624;
        }
        .footer{
            position: relative;
            width:100%;
            height: 50px;
            bottom: 0px;
            background-color: black;
        }
        .footer .copyright {
            position: relative;
            top:20px;
        }
    </style>
    </head>
	<body >
    <!--navigation bar-->
    <nav class="navbar navbar-expand-md navbar-light  sticky-top mt-3" style="background-color:#080624; color:#ffffff;">
        <div class="container-fluid">
            <h2 class="society-name " style="color:white; font-family: 'Texturina', serif;">CompSoc</h2>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav  ml-auto">
                    <li class="nav-item active" >
                        <a class="nav-link" href="/" style="color:#ffffff;">Home</a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="/kananiyam" style="color:#ffffff;">Kananiyam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('events.index') }}" style="color:#ffffff;">Event</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/Seminar" style="color:#ffffff;">Seminar</a>
                    </li>
                    <li class="nav-item nav-item1">
                        <a class="nav-link" href="/cspark" style="color:#ffffff;">Park</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffffff; ">About</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#080624;">
                            <a class="dropdown-item" href="/members" style="color:#ffffff;">Our Team</a>
                            <a class="dropdown-item" href="/gallery" style="color:#ffffff;">Gallery</a>

                            <a class="dropdown-item" href="/financial_support" style="color:#ffffff;">Financial Support</a>
                            <a class="dropdown-item" href="#" style="color:#ffffff;">About Us</a>
                        </div>
                    </li>

                    <li class="nav-item">
                    @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a href="{{ route('login') }}" class="btn" aria-pressed="true" style="color:#ffffff;">{{ __('Login') }}</a>
                                </li>
                            @endif

                        @else
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" aria-pressed="true" style="color:#ffffff;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(empty(Auth::user()->profile))
                                 <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="10" height="10" class="rounded-circle">
                                @else
                                 <img src="{{asset('/storage/images/'.Auth::user()->profile)}}" width="20" height="20" class="rounded-circle">
                                @endif
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" aria-pressed="true"  href="/profile/{id}">
                                        <b>
                                        Profile
                                        </b>
                                    </a>
                                    <a class="dropdown-item" aria-pressed="true"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <b>
                                        {{ __('Logout') }}
                                        </b>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </li>
                </ul>
            </div><!--collapse navibar-collapse-->
        </div><!--end container-fluid-->
    </nav><!--end navibar-->

        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">We are doing seminars For school students</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">We are doing this for 10 years. We are doing seminars for school students from various cities for free.</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Read More</a>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="seminarregistration">Register Teach Them</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center about-seminar">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">About Seminar</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque sequi delectus minus illum doloribus sapiente ducimus atque
                             dignissimos facere molestias consectetur ipsum laborum iusto quidem alias, fuga voluptate esse? Tempore!</p>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">MoreInfo</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">At Seminars</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-microphone text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Speakers</h3>
                            <p class="text-muted mb-0">Speakers are our students</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Language</h3>
                            <p class="text-muted mb-0">We conatct seminars in all three languages</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-utensils text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Refreshments</h3>
                            <p class="text-muted mb-0">our compsoc is giving free refreshments for participating students</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-chalkboard-teacher text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Methods of seminar</h3>
                            <p class="text-muted mb-0">With interactive slides and other things</p>
                        </div>
                    </div>
                </div>
            </div>

			<!-- Photos Content -->
	<div class="container page-section">

		<h1 class="font-weight-heavy text-center text-lg-Center mt-4 mb-0">Photos</h1>

		<hr class="mt-2 mb-5">

		<div class="inside-photo">
            <div class="row text-center text-lg-left photos mt-2 mb-5">

                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s1.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s2.jpg" alt="">
                    </a>
                    </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s3.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s4.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s5.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s6.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s7.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s8.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s9.png" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s10.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s11.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s12.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>

	</div>
	<!-- /.container -->
        <!-- Footer-->
        <footer class="footer">
            <div class="container">
                <div class="small text-center text-muted copyright">Copyright © 2020 All Rights Reserved by <a href="#" target="_blank">Computer Society University of Jaffna.</a>
            </div>
            </div>
        </footer>
        </section>



		<script type = "text/javascript" src = "js/bootstrap.min.js "></script>
		<script type = "text/javascript" src = "js/Jque.js "></script>
		<script type = "text/javascript" src = "js/script.js "></script>

	</body>
</html>
