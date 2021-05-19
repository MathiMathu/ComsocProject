<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css/footer.css">
    <!--link style navibar and slider-->
    <link rel = "stylesheet" type = "text/css" href = "css/style.css">


   <!----------------------link google font for website name------------------------->
   <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Texturina:ital,wght@1,100&display=swap" rel="stylesheet">

     <!----------------------link google font for body------------------------->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=v6HePCTnT6Z0HoRqAnrN84RI9LNaEztjACmbi70896NcVWOwpUEAV75w22zaJwFoGrU8UT_8Mu83kcORnkhBTK3YIIza3IvA4wicuw85IsMDzi7g_eBCL2M8sLlyv3B_puWdyO8Q6IjIxudA0qVwp6TPiAslUFASojXN3XnpgcDUIEjqJR759_IoCTZIMvSMvFUBHSbvj7ZRfvOEQhLiH0PTnvBd3w5hZsOu7EuaCjosZohatxu9mpHL96Dq6tbctI7hnUKs864AfPb08onoqdK7SvJTKdOd8YqttHzAQn-ksn5-VatlBQAnDtO-LPXmyiWNge7Xub1Vrj6swdAOsGbP3wtecStM0erT0py1lka_p9XdX4pumayu05MATm3MevONzOOLxRVQQLngZBStCxmDKww08DWuYxugAWOpSKR5T5qh6Od-nGbmhu08V08Aj-XObNTOo9JvsFJjMiZpRA" charset="UTF-8"></script></head>

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
        .fa-linkedin {
         background: #007bb5;
         color: white;
        }
        #gallery-main-part {
        width: 85%;
        float: right;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        }
        @media screen and (max-width: 1200px) {
        #gallery-main-part {
            width: 70%;
        }
        }
        @media screen and (max-width: 768px) {
            #gallery-main-part {
                width: 100%;
            }
        }


        .gallery-content {
        position: relative;
        margin-bottom: 7em;
        float: left;
        width: 100%;
        }
        .gallery-content .gallery-item {
        width: 25%;
        position: relative;
        overflow: hidden;
        display: block;
        float: left;
        z-index: 110;
        }
        .gallery-content .gallery-item img {
        position: relative;
        max-width: 100%;
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -ms-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
        -webkit-transition: 0.9s;
        -o-transition: 0.9s;
        transition: 0.9s;
        }
        @media screen and (max-width: 1200px) {
        .gallery-content .gallery-item {
            width: 33.3333%;
        }
        }
        @media screen and (max-width: 768px) {
            .gallery-content .gallery-item {
                width: 50%;
            }
        }
        @media screen and (max-width: 480px) {
            .gallery-content .gallery-item {
                width: 100%;
            }
        }
        .gallery-content .gallery-item .overlay {
        position: absolute;
        right: 0;
        left: 0;
        bottom: 0;
        top: 0;
        z-index: 11;
        vertical-align: middle;
        padding-top: 30%;
        visibility: hidden;
        opacity: 0;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        transition: 0.5s;
        }
        .gallery-content .gallery-item .overlay h2, .gallery-content .gallery-item .overlay span {
        position: relative;
        z-index: 12;
        margin-bottom: 0;
        text-align: center;
        display: block;
        -webkit-transition: 0.3s;
        -o-transition: 0.3s;
        transition: 0.3s;

        }
        .gallery-content .gallery-item .overlay h2 {
        color: #fff;
        font-size: 26px;
        font-weight: 300;
        margin-bottom: 10px;
        bottom: -15px;
        }
        @media screen and (max-width: 768px) {
            .gallery-content .gallery-item .overlay h2 {
                font-size: 18px;
            }
        }
        .gallery-content .gallery-item .overlay span {
        color: #7ac143;
        color: rgba(255, 255, 255, 0.7);
        font-size: 11px;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-weight: 400;
        bottom: -5px;
        visibility: hidden;
        opacity: 0;

        }
        .gallery-content .gallery-item .overlay:before {
        content: '';
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.5);
        }
        .gallery-content .gallery-item:hover img {
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -o-transform: scale(1);
        transform: scale(1);
        }
        .gallery-content .gallery-item:hover .overlay {
        visibility: visible;
        opacity: 1;
        }
        .gallery-content .gallery-item:hover .overlay:before {
        content: '';
        position: absolute;
        z-index: 1;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.5);
        }
        .gallery-content .gallery-item:hover .overlay h2 {
        bottom: 0px;
        }
        .gallery-content .gallery-item:hover .overlay span {
        visibility: visible;
        opacity: 1;
        bottom: 0px;

        }
        .gallery-items{
            position:relative;
            top:50px;
            bottom:0px;
        }
        .gallery-item img{
            height:200px;
            width:100%;
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
                            <a class="dropdown-item" href="#" style="color:#ffffff;">About Us</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="btn" aria-pressed="true" style="color:#ffffff;">LogIn</a>
                    </li>
                </ul>
            </div><!--collapse navibar-collapse-->
        </div><!--end container-fluid-->
    </nav><!--end navibar-->

    <!--------------------Component of the betweeen navibar and footer------------------------------------------------------->
        <div class="container ">
            <div class="row gallery-items mt-15">
                <div id="gallery-main-part mt-15">
                    <div class="gallery-content">

                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album1.jpg" alt="" class="img-fluid">
                            <span class="overlay">
                                <h2>IEEE</h2>
                                <span>16 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album2.png" alt="">
                            <span class="overlay">
                                <h2>Experience sharing</h2>
                                <span>7 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album3.png" alt="">
                            <span class="overlay">
                                <h2>UOJ coders</h2>
                                <span>22 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album5.jpg" alt="">
                            <span class="overlay">
                                <h2>Building</h2>
                                <span>28 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album6.jpg" alt="">
                            <span class="overlay">
                                <h2>People 2</h2>
                                <span>17 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album7.jpg" alt="">
                            <span class="overlay">
                                <h2>Beach</h2>
                                <span>34 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album8.jpg" alt="">
                            <span class="overlay">
                                <h2>Vegetarian Food</h2>
                                <span>10 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album9.jpg" alt="">
                            <span class="overlay">
                                <h2>Travel</h2>
                                <span>19 Photos</span>
                            </span>
                        </a>

                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album10.jpg" alt="">
                            <span class="overlay">
                                <h2>Family</h2>
                                <span>42 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album11.jpg" alt="">
                            <span class="overlay">
                                <h2>Food</h2>
                                <span>10 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album12.jpg" alt="">
                            <span class="overlay">
                                <h2>Gadgets</h2>
                                <span>76 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album1.jpg" alt="" class="img-fluid">
                            <span class="overlay">
                                <h2>Nature</h2>
                                <span>14 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album2.png" alt="">
                            <span class="overlay">
                                <h2>People</h2>
                                <span>7 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album3.png" alt="">
                            <span class="overlay">
                                <h2>Sky</h2>
                                <span>22 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album5.jpg" alt="">
                            <span class="overlay">
                                <h2>Building</h2>
                                <span>28 Photos</span>
                            </span>
                        </a>
                        <a class="gallery-item" href="photo_album">
                            <img src="img/gallery/album6.jpg" alt="">
                            <span class="overlay">
                                <h2>People 2</h2>
                                <span>17 Photos</span>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
     <!-------------------- end Compnent of the betweeen navibar and footer------------------------------------------------------->
     <br>

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
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Kananiyam</a></li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Discussion</a></li>
                    <li><a href="#">CS park</a></li>
                    <li><a href="#">Financial Support</a></li>
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

</body>
</html>
