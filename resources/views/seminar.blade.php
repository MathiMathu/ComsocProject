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
                                <i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>
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
                        <p class="text-white-75 font-weight-light mb-5">Conducting seminars to recap ICT subjects and past examination papers to those students who prepare to sit for the G.C.E (O/L) and G.C.E(A/L).It will be very helpful for the school students.Students will get wider knowledge.Volunteer students can apply to conduct seminars.</p>
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
                        <h2 class="text-white mt-0">Past Seminars</h2>
                        <hr class="divider light my-4" />
<table class="table table-bordered table-dark">
</table>
                        
                        <p class="text-white-60 mb-5">The Computer Society (COMSOC) of the DCS has conducted four seminars to recap ICT subjects and past examination papers to those students who sat for the G.C.E. (A/L) in August 2018. The seminars were conducted on the following dates and venues:</p>
                    </div>
                </div>
                <div class="row justify-content-center about-seminar">
                <table class="table table-bordered table">
  <thead>
    <tr>
      <th scope="col">Seminar</th>
      <th scope="col">Date</th>
      <th scope="col">Educational Zone</th>
      <th scope="col">Centre</th>
      <th scope="col">#Students</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>14/07/2018</td>
      <td>Jaffna</td>
      <td>DCS@UoJ</td>
      <td>74</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>14/07/2018</td>
      <td>Aralaganwila</td>
      <td>Vilayaya Central College</td>
      <td>20</td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>15/07/2018</td>
      <td>Mullaithivu</td>
      <td>Puthukkudiyiruppu Central College</td>
      <td>20</td>
    </tr>
    <tr>
    <th scope="row">4</th>
    <td>16/07/2018</td>
      <td>Anuradhapura</td>
      <td>Anuradhapura Central College</td>
      <td>20</td>
    </tr>
  </tbody>
</table>
<p class="text-black-60 mb-5">The Computer Society (COMSOC) of the Department of Computer Science (DCS), University of Jaffna conducted two parallel workshop one in Mulliyavalai and another one in Polonnaruwa to recap ICT subjects and past examination papers to the G.C.E. (A/L) students. The workshop was held on 16th of July 2017 from 8.30 am to 4.30 pm in the following centres:<br>
             <ol>
                <li>Mullaithivu Educational Zone held in Vidyananda College, Mulliyavalai</li>
                <li>Polonnaruwa Centre held in Vilayaya Central College</li>         
            </ol></p>
    </div> 
    <div class="row justify-content-center about-seminar">
<table class="table table-bordered table-dark">
</table>  
            <p class="text-black-60 mb-5">The Computer Society (COMSOC) of the Department of Computer Science (DCS), University of Jaffna conducted an Introductory Seminars on Website Development for School Students at the following schools in the year of 2012:<br>
            <ol>[29/06/2012] Jaffna Zonal
                <li>Jaffna Central College</li>
                <li>Jaffna Hindu Ladies College</li>
                <li>Puththoor Somaskanda Vidyalayam.</li>
            </ol><br></br>
            <ol>[02/07/2012] Valikaamam Zonal
                <li>J/Manipay Hindu Ladies College</li>
                <li>J/Vaddu Hindu College</li>
                <li>J/Ramanathan Hindu Ladies College</li>
                <li> J/Mallakam Maha Vidyalayam</li>
            </ol><br></br>
            <ol>[05-07-2012] Vadamaraadchi Zonal
                <li>J/Nelliyadi Maththiya Maha Vidyalayam</li>
                <li>J/Methodist Girls’ High School</li>
                <li>J/Uduppiddi American Mission Girls College</li>
            </ol><br></br>
            <ol>[10/07/2012] Thenmaraadchi Zonal
                <li>J/Kathaithady Muththukumarasuvamy Maha Vidyalayam</li>
                <li>J/Chanvakachcheri Hindu College</li>
                <li>J/Kodikamam Thirunavaukarasu Vidyalayam</li>
            </ol><br></br>
            <ol>[06-07-2012] Island Zonal
                <li>J/Velanai Central College</li>
                <li>J/St.Antoneys’ College, Kayts</li>
                <li>J/Yarlton College, Karainagar</li>
            </ol>
        </p>
        </div>

<div class="row justify-content-center about-seminar">
<table class="table table-bordered table-dark">
</table>
<p class="text-black-60 mb-5">The Computer Society (COMSOC) of the Department of Computer Science (DCS), University of Jaffna conducted Hands on Practical for School Teachers on Website development using Joomla in the following schools in the year of 2012:<br>
      <ol>
      <li>[31/07/2012] Puloly Computer Resource Center</li>
      <li>[01/08/2012] Sanmarka Maha Vidyalayam</li> 
      </ol>
        </p>
</div>
<div class="row justify-content-center about-seminar">
<table class="table table-bordered table-dark">
</table>
<p class="text-black-60 mb-5">The Computer Society (COMSOC) of the Department of Computer Science (DCS), University of Jaffna conducted Hands on Practical for School Students on Website development using Joomla in the following schools in the year of 2012:<br>
      <ol>
      <li>[06/08/2012] Velanai Computer Resource Center</li> 
      <li>[07/08/2012] Puloly Computer Resource Center</li>  
      <li>[08/08/2012] Inuvil Hindu College</li> 
      <li>[08/08/2012] Chankanai Sivapirakasa Vidyalayam</li> 
      <li>[09/08/2012] Jaffna Computer Resource Center</li>     
      <li>[10/08/2012] Sanmarka Maha Vidyalayam</li>  
      <li>[15/08/2012] Chavakachcheri Ladies College</li>     
      <li>[15/08/2012] Kaithady Resource Center</li> 
     </ol></p>
 </div>           
</div>
 </section>

			<!-- Photos Content -->
	
		<h1 class="font-weight-heavy text-center text-lg-Center mt-4 mb-0">Photos</h1>

		<hr class="mt-2 mb-5">

		<div class="inside-photo">
            <div class="row text-center text-lg-left photos mt-1 mb-4">
                <div class="col-lg-3 col-md-4 col-5">
                    <a href="#" class="d-block mb-4 h-300">
                    <img class="img-fluid img-thumbnail" src="img/seminar21 (2).jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-5">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/seminar21 (1).jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-5">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s11.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-5">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="img/s4.jpg"  alt="">
                    </a>
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



		<!-- <script type = "text/javascript" src = "js/bootstrap.min.js "></script>
		<script type = "text/javascript" src = "js/Jque.js "></script>
		<script type = "text/javascript" src = "js/script.js "></script> -->

	</body>
</html>
