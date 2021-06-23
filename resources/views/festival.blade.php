<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Festival Page</title>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/festivalStyle.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link rel = "stylesheet" type = "text/css" href = "css/footer.css">
<!--link the font awesome/icons 4.7-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
        .about h2,.about h3 ,.about h6{
            color:white !important;
        }
        .about ul li{
            color: white !important;
        }
        .list-image ul li a{

            text-decoration: none;
        }
        .list-image i{
            color: #34f50d;
        }
        .list-image i:hover{
            color:#3B5998;
        }
        .list-image ul {
            list-style-type: none;
            position: relative;
        }
        .list-image ul li a{
            position: relative;
            left: 0px;
        }
        .our-memories{
            content:center !important;
        }

        .our-memories img{
            width:200px;
            height:120px;
        }
        .title h1{
            text-transform: uppercase;
            font-weight: 400;
            border-top: 5px double #012005;
            border-bottom: 5px double #012005;
        }
        .our-memories div{
            position: relative;
            left:10%;
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


<!--Hero_Section-->
<section id="hero_section" class="top_cont_outer">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-md-12">

            <div class="top_left_cont zoomIn wow animated">
              <h2>We are celebrating festivals like a<br/><strong>Family</strong></h2>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
<!--Hero_Section-->



<section id="aboutUs"><!--Aboutus-->
<div class="inner_wrapper about-us aboutUs-container fadeInLeft animated wow">
  <div class="container about">
    <h2>About</h2>
	<h6>We are celbrating it like a family</h6>
    <div class="inner_section">
 <div class="row">
      <div class="col-md-5"> <img class="img-fluid" src="img/about1.jfif" > </div>
      <div class="col-md-5">
        <h3>Introduction</h3>
        <p>We conduct several events on various festivals.For example we every every year celebrate saraswathi pooja as a family in our department sourrounding.Compsoc arranges various preparations on festival days.</p>

        <!-- <p>
									</p>

									<ul class="about-us-list">
										<li class="points">Saraswathi Pooja</li>
                                        <li class="points">Christmas</li>
										<li class="points">Vesak</li>
									</ul>/.about-us-list -->

      </div>
    </div>
	     </div>
  </div>
  </div>
</section>
<div class="container text-center">

        <div class="col-md-12 mt-4 mb-4 title">
            <h1>Our Memories</h1>
        </div>

            <div class="row our-memories mb-5 mt-2 text-center">
                <div class="col-xs-3 ml-2 " style="width:auto" >
                    <img src="img/saraswathi_festival.jpg"  alt="" class="img-fluid">
                </div>
                <div class="col-xs-3 ml-2">
                    <img src="img/vesak_festival.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-xs-3 ml-2">
                    <img src="img/ramasan_festival.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-xs-3 ml-2">
                    <img src="img/crismas_festival.jpg" alt="" class="img-fluid">
                </div>
            </div>
</div>
<div class="list-image">
    @foreach ($image as $images)
    <ul>
        <li> <h6><i class="fa fa-asterisk" aria-hidden="true"></i><span> </span><a href="/view_festival/{{$images->id}}">{{$images->date}} {{$images->title}}Festivales images</a></h6></li>
    </ul>
    @endforeach
</div>
<!--About-->

<!--footer-->
<footer class="site-footer">
    <div class="container">
      <div class="row">
          <div class="col-sm-12 col-md-6">
              <h6>About</h6>
              <img src="img/logo.jpg" alt="" class="img-fluid">
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
                    <li><a href="/members">Team</a></li>
                    <li><a href="kananiyam">Newsletter</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                    <li><a href="events">Events</a></li>
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

<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>
