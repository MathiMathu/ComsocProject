<?php
use Illuminate\Support\Str;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photo Album</title>

	<link rel = "stylesheet" type = "text/css"  href="{{asset('css/footer.css') }}">
    <!--link style navibar and slider-->
    <link rel = "stylesheet" type = "text/css" href="{{asset('css/style.css') }}">


   <!----------------------link google font for website name------------------------->
   <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Texturina:ital,wght@1,100&display=swap" rel="stylesheet">

     <!----------------------link google font for body------------------------->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">



    <!--link the font awesome/icons 4.7-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
        body {
            font-family: "Raleway", sans-serif;

		  line-height: 1.6;
		  color: rgba(0, 0, 0, 0.5);
		}
		@media screen and (max-width: 992px) {
		  body {
			font-size: 16px;
		  }
		}

		a {
		  color: #7ac143;
		  -webkit-transition: 0.5s;
		  -o-transition: 0.5s;
		  transition: 0.5s;
		}
		a:hover, a:active, a:focus {
		  color: #7ac143;
		  outline: none;
		}

		p {
		  margin-bottom: 1.5em;
		}

		h1, h2, h3, h4, h5, h6 {
		  color: #000;
		  font-family: "Raleway", sans-serif;
		  font-weight: 700;
		  margin: 0 0 30px 0;
		}

	    .event-heading {
            color:red !important;
		  font-size: 45px;
		  margin-bottom: 1em;
		}
        .event-title p{
            color:rgba(6, 52, 136, 0.945) !important;
            font-weight: 400;
		  font-size: 1em;

		}

		.event-heading span {
            border-bottom: 3px double #0f01ca;
		  display: block;
		}
		@media screen and (max-width: 768px) {
		  .event-heading{
			font-size: 30px;
			margin-bottom: 1em;
		  }
		}
		figure {
		  margin-bottom: 2.5em;
		  float: left;
		  width: 100%;
		}
		figure figcaption {
		  font-size: 16px;
		  width: 80%;
		  margin: 20px auto 0px auto;
		  color: #b3b3b3;
		  font-style: italic;
		  font-family: "Raleway", sans-serif;
		}
		@media screen and (max-width: 480px) {
		  figure figcaption {
			width: 100%;
		  }
		}
        .content{
            position:relative;
            top:50px;
            bottom:0px;

        }
        .btn:hover, .btn:active, .btn:focus {
        box-shadow: none !important;
        outline: none !important;
        }

        .btn-primary {
        background: #7ac143;
        color: #fff;
        border: 2px solid #7ac143;
        }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active {
        background: #88c756 !important;
        border-color: #88c756 !important;
        }
        .btn-primary.btn-outline {
        background: transparent;
        color: #7ac143;
        border: 2px solid #7ac143;
        }
        .btn-primary.btn-outline:hover,  {
        background: #7ac143;
        color: #fff;
        }
   </style>

</head>
<body>
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
                        <a class="nav-link" href="#" style="color:#ffffff;">Discussion</a>
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
                            <a class="dropdown-item" href="aboutus" style="color:#ffffff;">About Us</a>
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

    <!--------------------Component of the betweeen navibar and footer------------------------------------------------------->
    <div class="container">
        <div class="row content text-center">
            <div class="event-title  mt-15" >
                @foreach($files as $file)
                    <h2 class="event-heading" ><span>{{ $file->Event_Name}}</span></h2>
                    <p>{{ $file->description}}</p>
                    <?php
                        $length = strlen($file->filenames);
                        $i =2;
                    ?>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <?php
                              $picture = Str::substr($file->filenames,2,20);
                            ?>
                            @while($i<$length)
                                <?php $picture = Str::substr($file->filenames,$i,20);
                                 $i = $i+20+3;
                                ?>
                                <figure><img src="{{asset('/storage/gallery/'.$picture)}}" alt="" style="width:700px;height:75%;" class="img-fluid"></figure>
                            @endwhile
                            <!-- <div class="col-md-12">
                                <figure><img src="storage/gallery/album1.jpg" alt="" class="img-fluid">
                                    <figcaption>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae voluptatibus, odit obcaecati consequatur dolore cum labore, doloremque id ratione placeat est quasi numquam rem dolorum esse, similique iure accusantium aperiam.</figcaption>
                                </figure>
                            </div>
                            <div class="col-md-12">
                                <figure><img src="storage/gallery/album1.jpg" alt="" class="img-fluid"></figure>
                            </div>
                            <div class="col-md-12">
                                <p class="text-center"><a href="gallery" class="btn btn-primary btn-outline">More Photos</a></p>
                            </div> -->
                       </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




     <!-------------------- end Compnent of the betweeen navibar and footer------------------------------------------------------->
     <br>
     <br>
      <!--footer-->
      <footer class="site-footer">
        <div class="container">
          <div class="row">
              <div class="col-sm-12 col-md-6">
                  <h6>About</h6>
                  <img src="{{ URL::to('img/logo.jpg') }}" alt="" class="img-fluid">
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

</body>
</html>
