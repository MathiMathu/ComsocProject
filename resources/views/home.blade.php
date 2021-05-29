<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css/footer.css">


    <!-----link style navibar and slider----->
    <link rel = "stylesheet" type = "text/css" href = "css/style.css">


   <!-----link google font for website name----->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Texturina:ital,wght@1,100&display=swap" rel="stylesheet">

   <!-----link google font for body----->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=v6HePCTnT6Z0HoRqAnrN84RI9LNaEztjACmbi70896NcVWOwpUEAV75w22zaJwFoGrU8UT_8Mu83kcORnkhBTK3YIIza3IvA4wicuw85IsMDzi7g_eBCL2M8sLlyv3B_puWdyO8Q6IjIxudA0qVwp6TPiAslUFASojXN3XnpgcDUIEjqJR759_IoCTZIMvSMvFUBHSbvj7ZRfvOEQhLiH0PTnvBd3w5hZsOu7EuaCjosZohatxu9mpHL96Dq6tbctI7hnUKs864AfPb08onoqdK7SvJTKdOd8YqttHzAQn-ksn5-VatlBQAnDtO-LPXmyiWNge7Xub1Vrj6swdAOsGbP3wtecStM0erT0py1lka_p9XdX4pumayu05MATm3MevONzOOLxRVQQLngZBStCxmDKww08DWuYxugAWOpSKR5T5qh6Od-nGbmhu08V08Aj-XObNTOo9JvsFJjMiZpRA" charset="UTF-8">
    </script>

    <!--link the font awesome/icons 4.7-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-----link boostrap,js and jquery----->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
         .card-img-top{
            margin-top:10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            height:200px;
         }
         .container .card:before{
             transform:skew(2deg,2deg);
         }

        .vision{

        }
        .fa:hover {
            opacity: 0.7;
        }
        .fa-facebook:hover {
            background: #3B5998;
            color: white;
        }
        .fa-twitter:hover {
         background: #55ACEE;
         color: white;
        }
        .fa-instagram:hover {
        background: #125688;
         color: white;
        }
        .fa-linkedin:hover {
         background: #007bb5;
         color: white;
        }
    </style>

</head>
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
                        <a class="nav-link" href="" style="color:#ffffff;">Home</a>
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
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    <br>
    <!--inside the footer and  navibar-->
    <div class="container-fluid">
         <!--image slider-->
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="o" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner" data-interval="3000">
                <div class="carousel-item active">
                    <img src="img/home/p38.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/home/p47.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="img/home/p26.png" alt="">
                </div>
            </div>

        </div>
        <!--end image slider-->
        <br>



    </div>
    <!--------------------End container class------------------------------------------------------------------------>
    <br>
    <br>
    <!--------------------start our vision------------------------------------------------------->
    <div class="container padding shadow">
        <div class="row vision text-center">
            <div class="col-md-12 vision" >
                <h1 class="dispaly-4 vision-term"><span> Our Vision</span> </h1>
                <p>"Our aims and objectives to promote the dissemination of
                     scientific knowledge with special emphasis on Computers and their application"
                </p>
            </div>
        </div>
    </div>

    <!--------------------End our vision------------------------------------------------------->
    <br>
    <hr style="width:50%;text-align:left;margin-left:0">
    <br>

    <!--------------------Start short description part ------------------------------------------------------------------------>

    <!--------------------Start short description part row 1 ------------------------------------------------------------------------>
    <div class="container-fluid">
        <div class="row ml-5 mr-5 justify-content-around">
            <div class="col-md-4 description  mt-5 ">
                <div class="content">

                    <h2>Kananiyam</h2>
                    <p>An annual newsletter nurtures student articles to enlighten the readers on latest trends in computing field including various information about student activities and achievements in the DCS.</p>
                    <a href="/kananiyam " active>view more</a>
                </div>
            </div>
            <div class="col-md-4 description col-md-offset-2 mt-5">
                <div class="content">

                    <h2>Event</h2>
                    <p>We arrange workshops and techtalks for students.It is a nice opportunity for discussing, sharing new ideas. Students can get new knowledge from outside resources.</p>
                    <a href="events">view more</a>
                </div>
            </div>
            <div class="col-md-4 description col-md-offset-2  mt-5">
                <div class="content">

                    <h2>Festival</h2>
                    <p>We celebrate festivals, Such as Saraswathi Pooja, Ramadan,
                        Vesak.Saraswati Pooja is ritualistic worship performed for pleasing the Goddess and receiving her divine grace</p>
                    <a href="festival">view more</a>
                </div>
            </div>
        </div>
    </div>
    <!--------------------End  short description part row 1 ------------------------------------------------------------------------>

    <br>

     <!--------------------Start short description part row 2 ------------------------------------------------------------------------>
     <div class="container-fluid">
        <div class="row ml-5 mr-5 justify-content-around">
            <div class="col-md-4 description  mt-5 ">
                <div class="content">

                    <h2>Seminar</h2>
                    <p>We do seminars for A/L and O/L students for the past 12 years.You can join Us to teach them</p>
                    <a href="Seminar">view more</a>

                </div>
            </div>
            <div class="col-md-4 description col-md-offset-2 mt-5">
                <div class="content">

                    <h2>Our Team</h2>
                    <p>Look, Our ComSoc New team members. Mr. Mathanraj is the chairperson of the Society and the secretary is ,</p>
                    <a href="members">view more</a>
                </div>
            </div>
            <div class="col-md-4 description col-md-offset-2  mt-5">
                <div class="content">

                    <h2>CS Park</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus dolorum cupiditate, distinctio vitae quo deleniti exercita</p>
                    <a href="cspark">view more</a>
                </div>
            </div>
        </div>
    </div>
    <!--------------------End  short description part row 2 ------------------------------------------------------------------------>




    <!--------------------End short description part ------------------------------------------------------------------------>

     <!--------------------start about Us------------------------------------------------------->
     <div class="container padding shadow">
        <div class="row about-us">
            <div class="col-md-12">
                <h1 class="dispaly-4 aboutus-term"><span>About Us</span> </h1>
                <p class="text-center">The society shall be called,
                    The Computer Society,
                    University of Jaffna,
                    Sri Lanka
                    Our aims and objectives to promote the
                    dissemination of scientific knowledge with special emphasis on Computers and their application.
                </p>
                <div class="text-center mb-5 view-more-button">
                    <a href="/aboutus" class="btn btn-outline-secondary view-more mt-2 ">View more</a>
                </div>

            </div>
        </div>
    </div>

    <!--------------------End start about Us------------------------------------------------------->

    <!--------------------start Galary------------------------------------------------------->
    <div class="container padding shadow">
        <div class="row Galary text-center">
            <div class="col-md-12">
                <h1 class="dispaly-4 galary-term"><span> Gallery</span>  </h1>
                <p>Sunset is the time of day when our sky meets the outer space solar winds.
                    There are blue, pink, and purple swirls, spinning and twisting, like clouds
                    of balloons caught in a whirlwind. The sun moves slowly to hide behind the
                     line of horizon, while the moon races to take its place in prominence atop
                     the night sky. People slow to a crawl, entranced, fully forgetting the deeds that must still be done.

                </p>

                <!--------galary row 1---------------------------------->
                <div class="row">
                    <div class="col-md-2">
                        <img src="img/home/album1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/home/album2.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/home/album3.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/home/album4.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/home/album5.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/home/album6.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                 <!--------end galary row 1---------------------------------->

                 <!--------galary row 2---------------------------------->
                <div class="row">
                    <div class="col-md-2">
                        <img src="img/home/album7.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/home/album8.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/home/album9.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/home/album10.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/home/album11.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/home/album12.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                 <!--------end galary row 2---------------------------------->

                 <div class="text-center mb-5 view-more-button">
                    <a href="#" class="btn btn-outline-secondary view-more mt-2 ">View more</a>
                </div>
            </div>
        </div>
    </div>

    <!--------------------End Galary------------------------------------------------------->

     <!--End inside the footer and  navibar-->

     <!--footer-->
     <footer class="site-footer">
      <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <img src="img/home/logo.jpg" alt="" class="img-fluid">
            </div>

            <div class="col-xs-6 col-md-4">
                <h6 class = "text-center">Contact</h6>
                <div class="row">
                    <div class="column left">
                        <p style = "font-size : 10px"> President,<br>Computer Society (CompSoc),<br>Department of Computer Science,<br>University of Jaffna.<br>Email :  comsoc@univ.jfn.ac.lk<br>Phone : 077 104 4491</p>
                    </div>
                    <div class="column right">
                        <p style = "font-size : 10px">Head,<br>Department of Computer Science,<br>Faculty of Science,<br>University of Jaffna.<br>Email :  dcs@univ.jfn.ac.lk<br>Phone : 021 221 8194</p>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-md-2">
                <h6>Quick Links</h6>
                <ul class="footer-links" >
                    <li><a href="/">Home</a></li>
                    <li><a href="aboutus">About</a></li>
                    <li><a href="kananiyam">Kananiyam</a></li>
                    <li><a href="events">Events</a></li>
                    <li><a href="#">Festival</a></li>
                    <li><a href="cspark">CS park</a></li>
                    <li><a href="finnancial_suport">Financial Support</a></li>
                </ul>
            </div>
        </div>
        <hr>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                    <a href="#">Computer Society University of Jaffna </a>.
                    </p>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer class-->

		<script type = "text/javascript" src = "js/bootstrap.min.js "></script>
		<script type = "text/javascript" src = "js/Jque.js "></script>

</body>
</html>
