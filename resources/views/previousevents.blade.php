<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style1.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-----link boostrap,js and jquery----->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>PastEvent Details</title>
    <style>

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

        .card-img-overlay{

            background-color:rgba(80, 74, 250, 0.11);
            background-blend-mode: luminosity;
        }
        .card{
            margin: 5px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light  sticky-top " style="background-color:#080624; color:#ffffff;">
        <div class="container-fluid">

            <h2 class="society-name " style="color:white; font-family: 'Texturina', serif;">CompSoc</h2>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav  ml-auto">
                    <li class="nav-item active" >
                        <a class="nav-link" href="" style="color:#ffffff;">Home</a>
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
                            <a class="dropdown-item" href="/previousevents" style="color:#ffffff;">Previous Events</a>
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
                            @if(empty(Auth::user()->approved_at))
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="btn" aria-pressed="true" style="color:#ffffff;">{{ __('Login') }}</a>
                            </li>

                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" aria-pressed="true" style="color:#ffffff;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(empty(Auth::user()->profile))
                                <i class="fa fa-user-circle-o fa-lg" aria-hidden="true"></i>
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

                            @endif
                        @endguest
                    </li>
                </ul>
            </div><!--collapse navibar-collapse-->
        </div><!--end container-fluid-->
    </nav><!--end navibar-->

	<header class="mt-0 pt-0">
        <div class="row ml-0 mr-0">
            <div class="col-md-6 pr-0">
                <div class="card">
                    <img class="card-img" src="images/left-img.jpg" alt="" width = "480px" height = "480px" >
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">

                        <h2>UOJ Coders</h2>
						<p>The University of Jaffna (UoJ) coding competitions that we refer to as “UoJCoders” is aimed to enhance the problem-solving skills
						and programming skills among the undergraduate students in computing to produce efficient programmers.
						The competition is a 12-hours inter-university coding competition inspired by IEEEXtreme.</p>
                        <hr />
                        <a href="/uojcoders" class="btn">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-0">
                <div class="card">
                    <img class="card-img" src="images/competition.jpg" alt="" width = "480px" height = "480px">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                        <h2>Competitions</h2>
						<p>The Computer Society,Department of Computer Science,University of Jaffna conducted LOCKDOWN Coding Competitions
                        with the contribution of IEEE Student Branch,University of Jaffna.</p>
                        <hr />

                        <a href="/competitions" class="btn">READ MORE</a>
                    </div>
                </div>
            </div>
            <br>
			<div class="col-md-6 pr-0">
                <div class="card">
                    <img class="card-img" src="images/left-img1.jfif" alt="" width = "480px" height = "480px" >
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">

                        <h2>TechTalks</h2>
						<p>The Compsoc conducts techtalks continuously for each an every level students continuously.</p>
                        <hr />
                        <a href="/techtalk" class="btn">READ MORE</a>
                    </div>
                </div>
			</div>
            <div class="col-md-6 pl-0">
                <div class="card">
                    <img class="card-img" src="images/right-img1.jpg" alt="" width = "480px" height = "480px">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center flex-column">
                        <h2>Webinars & Workshops</h2>
						<p>The Compsoc conducts webinars and Workshops continuously for each an every level students continuously</p>
                        <hr />

                        <a href="/webinar" class="btn">READ MORE</a>
                    </div>
                </div>
            </div>
            


    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
