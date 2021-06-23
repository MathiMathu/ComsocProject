<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/kananiyamStyle.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />

    <title>Kananiyam</title>

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
                        @endguest
                    </li>
                </ul>
            </div><!--collapse navibar-collapse-->
        </div><!--end container-fluid-->
    </nav><!--end navibar-->

    <!-- Welcome Section -->
    <section id="tmWelcome" class="parallax-window" data-parallax="scroll" data-image-src="img/bg5.jpg">
      <div class="container-fluid tm-brand-container-outer">
        <div class="row">
          <div class="col-12">
            <!-- Logo Area -->
            <!-- Black transparent bg -->
            <div class="ml-auto mr-0 tm-bg-black-transparent text-white tm-brand-container-inner">
              <div class="tm-brand-container text-center">
                <h1 class="tm-brand-name">Kananiyam</h1>
                <p class="tm-brand-description mb-0">Newsletter</p>
              </div>
            </div>
          </div>
        </div>
		<br>
		<br>
		<br>
		<br>
		<div class = "btn btn-danger " style = "float : right; font-family : Arial; color:white; backgrond-color:red !important;">
            <a href ="add_kananiyam" style = "color:white;">Submit Article For Kananiyam</a>
        </div>
      </div>


      <div class="tm-bg-white-transparent tm-welcome-container">
        <div class="container-fluid">
          <div class="row h-100">
            <!-- Welcome Text -->
            <!-- White transparent bg -->
            <div class="col-md-12 tm-welcome-left-col">
              <div class="tm-welcome-left">
                <h2 class="tm-welcome-title">About</h2>
                <p class="pb-0">
                  The Computer Society (CompSoc) of the Department of Computer Science (DCS), The University of Jaffna annually releases a newsletter named “Kananiyam”.
				  The newsletter nurtures student articles to enlighten the readers on the latest trends in the computing field.
				  In addition, it provides various information about student activities and achievements in the DCS </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Welcome section -->
	<br>
    <!-- Portfolio section -->

    <section id="tmPortfolio">
		<div class = "container articles"><h1>The Articles</h1></div>
		<br>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="tm-portfolio-item">
              <div class="tm-portfolio-name text-white tm-bg-green">
                Technology News
              </div>
              <div class="tm-portfolio-description">
                <p class="mb-0">
                  The latest technology news about the world's best (and sometimes worst) hardware and software. Trending news about the technology are included.

                </p>
              </div>
            </div>

            <div class="tm-portfolio-item">
              <div class="tm-portfolio-name text-white tm-bg-orange">
				IT related articles
              </div>
              <div class="tm-portfolio-description">
                <p class="mb-0">
                  About the new languages,frameworks and new versions about the software.And About the history of the Computers.Articles that relates to computer hardware and software.
                </p>
              </div>
            </div>

            <div class="tm-portfolio-item">
              <div class="tm-portfolio-name text-white tm-bg-blue">
                Poems and Essays
              </div>
              <div class="tm-portfolio-description">
                <p class="mb-0">
                   Contain Poems and Essays in many languages. Creative and interesting poems and articles are included.Achievements of our department students are also included.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End portfolio section -->

    <!-- Footer -->
    <div style= " background-image: url(img/cover.jpg)">
	  <br>
	  <h2 class = "container"><b>Recent releases</b></h2>
	  <br>
	  <div class="container-fluid">
        <div class="row">

          <div class="col-7">
            <fieldset id="randomForm" class="tm-bg-white-transparent" style = "padding : 5px">
				<ul>
				<li><a href = "img/Kananiyam1999.pdf">1999 Kananiyam Article</a></li>
				<br>
				<li><a href = "img/Kananiyam2003.pdf">2003 Kananiyam Article</a></li>
				<br>
				<li><a href = "img/kananiyam2014.pdf">2014 Kananiyam Article</a></li>
				<br>
				<li><a href = "Configuration Guide.pdf">2018 Kananiyam Article</a></li>
				<li><a href = "view_past/">2017 Kananiyam Article</a></li>
				<br>


				</ul>
            </fieldset>

          </div>
        </div>
		<br>
        <!-- row -->

      </div>
      <!-- container -->
      <div class="text-center" >
        <div class="copyright"> <h6 class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. All rights reserved.</h6> </div>
    </div>
    </div>
    <!-- section -->
    <script src="js/jque.min.js"></script>
    <script src="js/parallax.min.js"></script>
  </body>
</html>
