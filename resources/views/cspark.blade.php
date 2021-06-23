<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Booking Form</title>

	   <!----------------------link google font for body------------------------->
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/Bookstyle.css" />

{{-- <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=PSM6SYeL2Z_z_23UfaqJkrXhWiRxPYQ0HEi3YizBFeOrQJykV0TZdqkhhjBCQrM2vBx8YAnSgA4TGuGLadIbBPsWQxsFFk4qB1o4rbX_m-7CLOfEvHdCWEP_7Q1hCzXzkTcNnI2y8FtOCE_jFF7KgcZ1879SuBtxpIju_H87AP_EWzSATRC-4C6HSr--08WoGl99KVkqds2JUSqCglo-QMqmZlRMOzhcoAAAX3sceeliLkqaAP7Fo9lc3Dg97KceGgiTNW7ARvo1U5D6cX8lUE7An7GvfmZZKkDcB0aD2rnGWanSTTdQCa01mzuJtrYxwwxIPfNRwHTfS34SH5XN86mFf7QOCiJT7K2bcJNKIRRc1WKsZzXWWDIZttcxUCqpbIhSVWDrj58soOoTCEOLZOnWARcSPxzbdpKDp4taCGz21-bqIGqNk1Gjo-k0LSvuhRIDru800yzCeE3OlSOQiQ" charset="UTF-8"></script></head> --}}
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
         .error-message{
             color: red !important;
             font-size: 20px;
         }
</style>
<body>
    <!--navigation bar-->
    <nav class="navbar navbar-expand-md navbar-light  sticky-top " style="background-color:#080624; color:#ffffff;">
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
                        <a class="nav-link" href="aboutus" style="color:#ffffff;">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/members" style="color:#ffffff;">Team</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/kananiyam" style="color:#ffffff;">Newsletter</a>
                    </li>
                    <li class="nav-item nav-item1">
                        <a class="nav-link" href="/gallery" style="color:#ffffff;">Gallery</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#ffffff; ">Events</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:#080624;">
                            <a class="dropdown-item" href="{{ route('events.index') }}" style="color:#ffffff;">Upcoming Events</a>
                            <a class="dropdown-item" href="#" style="color:#ffffff;">Previous Events</a>
                            <a class="dropdown-item" href="/Seminar" style="color:#ffffff;">Seminars</a>
                            <a class="dropdown-item" href="/festival" style="color:#ffffff;">Festivals</a>
                            <a class="dropdown-item" href="/cspark" style="color:#ffffff;">Park</a>
                            <a class="dropdown-item" href="/financial_support" style="color:#ffffff;">Financial Support</a>
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

	<div id="booking" class="section">
		<div class="section-center">
			<div class="container cspark-form-and-history">
				<div class="row">
					<div class="col-md-12">
						<div class="booking-cta text-center">
							<h1 >CSC Park</h1>
							<p >A park is an area of natural, semi-natural, or planted space set aside for human enjoyment and recreation or for the protection of wildlife or natural habitats.
                                csc park is about  400 m to the inside from the faculty of science in the North Province of Sri Lanka. That was part of the department of computer science. Park consists of flowers, grassy areas, benches, soil, and trees. </p>
						</div>
					</div>

                </div>
                <div class="row text-center">
                    <div class="col-md-12 booking-term">
                        <h5>Book Park</h5>
                        <p><h6>You can book the park for your birthday celebration or welcome party or any function</h6></p>
                    </div>
                </div>
                <div class="errors">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Sorry !</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                     @endforeach
                                 </ul>
                         </div>
                     @endif

                @if(session('success'))
                <div class="alert alert-danger error-message">
                    {{ session('success') }}
                </div>
                @endif
        </div>

                <div class="row text-center">
                        <div class="col-md-12 col-md-offset-1 form-cspark text-center">
                            <div class="booking-form text-center">

                                <form method="post" action="saveCspark">
                                @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Registration Number</span>
                                                <input class="form-control" type="text" name="registration_number" placeholder="Eg : 2017/CSC/00" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Reason For Booking</span>
                                                <input type="text" class="form-control" name="reason" placeholder="Eg : Birthday Party, Welcome Party,.." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Booking Date</span>
                                                <input class="form-control" type="date" name="date" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Booking time</span>
                                                <input class="form-control" type="time" name="time" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Duration</span>
                                                <select class="form-control"  name="duration" required>
                                                    <option>One Hour</option>
                                                    <option>Two Hours</option>
                                                    <option>Three Hours</option>
                                                </select>
                                                <span class="select-arrow"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Email Address</span>
                                                <input class="form-control" type="text" name="email" required>
                                            </div>
                                        </div>
                                        <input class="text" type="hidden" name="action">
                                    </div>

                                    <div class="form-btn">
                                        <button class="submit-btn">Check and Book</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
			</div>
		</div>
	</div>
    <br>
    <div class="text-center" >
        <div class="copyright"> <h6 class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. All rights reserved.</h6> </div>
    </div>
	<script type = "text/javascript" src = "js/bootstrap.min.js "></script>
	<script type = "text/javascript" src = "js/Jque.js "></script>
</body>

</html>
