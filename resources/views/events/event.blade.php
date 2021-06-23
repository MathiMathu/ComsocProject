<?php
use Carbon\Carbon;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event page</title>
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css/footer.css">
    <!--link style navibar and slider-->
    <link rel = "stylesheet" type = "text/css" href = "css/style.css">

    <!--link style enent calender-->
    <link rel = "stylesheet" type = "text/css" href = "css/event.css">

    <!--link the font awesome/icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!----------------------link google font for body------------------------->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!----------------------link google font for website name------------------------->
   <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Texturina:ital,wght@1,100&display=swap" rel="stylesheet">

	{{-- <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=v6HePCTnT6Z0HoRqAnrN84RI9LNaEztjACmbi70896NcVWOwpUEAV75w22zaJwFoGrU8UT_8Mu83kcORnkhBTK3YIIza3IvA4wicuw85IsMDzi7g_eBCL2M8sLlyv3B_puWdyO8Q6IjIxudA0qVwp6TPiAslUFASojXN3XnpgcDUIEjqJR759_IoCTZIMvSMvFUBHSbvj7ZRfvOEQhLiH0PTnvBd3w5hZsOu7EuaCjosZohatxu9mpHL96Dq6tbctI7hnUKs864AfPb08onoqdK7SvJTKdOd8YqttHzAQn-ksn5-VatlBQAnDtO-LPXmyiWNge7Xub1Vrj6swdAOsGbP3wtecStM0erT0py1lka_p9XdX4pumayu05MATm3MevONzOOLxRVQQLngZBStCxmDKww08DWuYxugAWOpSKR5T5qh6Od-nGbmhu08V08Aj-XObNTOo9JvsFJjMiZpRA" charset="UTF-8"></script></head> --}}


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        body{
            height:100%;
            width:100%;
            font-family: "Open Sans", sans-serif;
            color:#222;
            background: url("../img/event/bg5.jpg") top center no-repeat;
            background-size: cover;
            position: relative;
        }
        body::before {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;

        }
        .event-description-details{
            background:rgba(52, 7, 110, 0.5);
        }
        .gallery-row{
            margin-top:30px;

        }

        @media (min-width: 1024px) {
            body {
            background-attachment: fixed;
            }
        }
        @media (min-width: 360px) {
            body {
            background-attachment: fixed;
            }
        }
        .event-detais-and-upcoming-event{
            position:relative;
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
         .card-img-top{
            margin-top:10px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            height:200px;
         }
        .event-details{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        .register-now{
         float:right;
        }
         .this-mont-event .row{
            box-shadow:12px 12px 22px grey;
        }
        .past-event-term h2,.past-event-term h6{
            font-family: "Raleway", sans-serif;
            color:white;
        }
         .term-upcoming-event{
            color:white;
            font-style:;
            margin:100px auto 50px auto;
            text-align:center;
            font-size:40px;
            max-width: auto;
            position:relative;
         }
         .term-upcoming-event:before{
            content:'';
            display:block;
            width:400px;
            height:2px;
            position:absolute;
            background:#320373;;
            left:0;
            top:30px;
            z-index:-2;

        }
        .term-upcoming-event:after{
            content:'';
            display:block;
            width:400px;
            height:2px;
            position:absolute;
            background:#320373;;
            right:0;
            top:30px;
            z-index:-2;

        }
        .term-upcoming-event span{

        }
        .event-img img{
            border-radius:5px;
            width:200px;
            height:200px;
            margin:5px;
            transition:.2s;
         }
         .event-img img:hover{
             transform:scale(1.2);
             z-index:.5;
         }
         .dat-and-time{
             position:relative;
             bottom:30px;
             left:250px;
         }

         .event-description{
             position:relative;
             top:5px;
         }
         .event-description h3{
            font-family: "Raleway", sans-serif;
            padding: 10px;
            color:white;
            font-size: 30px;

         }
         .event-description h6,.dat-and-time {
            font-family: "Raleway", sans-serif;
            color:white;


         }
         .past-event-gallary img{
            width:100%;
            height:90%;
        }
        .view-more a{
            color:white;
        }
        .view-more a:hover{
            background:red;
           color:white !important;
        }
        .register-now a{
           color:white;
        }
        .register-now a:hover{
            background:red;
           color:white !important;
        }
   </style>

</head>
<body>
    <!--navigation bar-->
    <nav class="navbar navbar-expand-md navbar-light  sticky-top" style="background-color:#080624; color:#ffffff;">
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

    <!--------------------Component of the betweeen navibar and footer------------------------------------------------------->



<br>

    <!--------------------Start container class------------------------------------------------------------------------>

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
                        <img src="img/event/p38.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="img/event/p47.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="img/event/p26.png" alt="">
                    </div>
                </div>

            </div>
            <!--end image slider-->
       </div>
        <br>

    <!--------------------End container class------------------------------------------------------------------------>

     <br>
     <br>
    <section class="event-details">
        <!--Event Calnder and upcoming event--->
        <div class="container">
            <div class="row event-term">
                <div class="col-md-12">
                    <h2 class="term-upcoming-event mt-5 mb-5"><span>Up Coming Events</span></h2>
                </div>
                @foreach ($events as $event)
                    <?php
                    $date1 = Carbon::now()->toDateString();
                    $date2 = $event->date;
                    $toDate = Carbon::createMidnightDate($date2)->addDay();
                    $fromDate = Carbon::createMidnightDate($date1);
                    $diffDays = $fromDate->diffInDays($toDate);
                    ?>
                  @if($toDate > $fromDate)
                    @if($event->is_register==1)
                </div>
                   @if (empty($event->guest))
               <div class="row ">
               <div class="col-md-12 this-mont-event no-gutters">

                    <!--strt events without guest name---->

                     <div class="row mt-3 event-description-details">
                        <div class="col-md-3 event-img">
                            <img src="{{asset('/storage/images/'.$event->image_name)}}" alt="" class="">
                        </div>

                        <div class="col-md-9 event-description ">
                            <h3 class="event-title  text-center mt-2">{{ $event->event_name}}</h3>
                            <h6 class="event-description mt-4">{{ $event->event_name}} will be held on  {{ $event->date}} from {{ date('h:i a',strtotime($event->start_time))}} to  {{ date('h:i a',strtotime($event->end_time))}} at  {{ $event->venue}}
                                .It is organized by the Computer society of Department of Computer science,university of Jaffna.We warmly welcomes all of you.
                            </h6>


                            <div class="text-center register-now">
                                <a href="{{ URL('register_now_form/'.$event->id)}}" class="btn btn-outline-secondary view-more mt-2 ">Register Now</a>
                            </div>

                        </div>
                        <div class="dat-and-time ">
                            <a href="download1/{{$event->id}}"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            <i class="fa fa-calendar" aria-hidden="true"><span class="ml-2 mr-3">{{ $event->date}}</span></i>
                            <i class="fa fa-clock-o" aria-hidden="true"><span class="ml-2 mr-3">{{ date('h:i a',strtotime($event->start_time))}}</span></i>
                        </div>
                   @else
                    <!--strt events with guest name---->
              <div class="row ">
                <div class="col-md-12 this-mont-event no-gutters">
                 <div class="row mt-3 event-description-details">
                  <div class="col-md-3 event-img">
                      <img src="{{asset('/storage/images/'.$event->image_name)}}" alt="" class="">
                  </div>

                  <div class="col-md-9 event-description ">

                      <h3 class="event-title  text-center mt-2">{{ $event->event_name}}</h3>
                      <h6 class="event-description mt-4">{{ $event->event_name}} will be held on  {{ $event->date}} from {{ date('h:i a',strtotime($event->start_time))}} to  {{ date('h:i a',strtotime($event->end_time))}} at  {{ $event->venue}}
                          .It is organized by the Computer Society  of Department of Computer Science, University of Jaffna. The chief guest for the event is {{ $event->guest}}. We warmly welcomes all of you.
                      </h6>


                      <div class="text-center register-now">
                          <a href="{{ URL('register_now_form/'.$event->id)}}" class="btn btn-outline-secondary view-more mt-2 ">Register Now</a>
                      </div>

                  </div>
                  <div class="dat-and-time ">
                      <a href="download1/{{$event->id}}"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                      <i class="fa fa-calendar" aria-hidden="true"><span class="ml-2 mr-3">{{ $event->date}}</span></i>
                      <i class="fa fa-clock-o" aria-hidden="true"><span class="ml-2 mr-3">{{ date('h:i a',strtotime($event->start_time))}}</span></i>
                  </div>

                  @endif
                @else
                </div>
                   @if (empty($event->guest))
               <div class="row ">
               <div class="col-md-12 this-mont-event no-gutters">

                    <!--strt events without guest name---->

                     <div class="row mt-3 event-description-details">
                        <div class="col-md-3 event-img">
                            <img src="{{asset('/storage/images/'.$event->image_name)}}" alt="" class="">
                        </div>

                        <div class="col-md-9 event-description ">
                            <h3 class="event-title  text-center mt-2">{{ $event->event_name}}</h3>
                            <h6 class="event-description mt-4">{{ $event->event_name}} will be held on  {{ $event->date}} from {{ date('h:i a',strtotime($event->start_time))}} to  {{ date('h:i a',strtotime($event->end_time))}} at  {{ $event->venue}}
                                .It is organized by the Computer Society of Department of Computer Science, University of Jaffna.We warmly welcomes all of you.
                            </h6>


                            <!-- <div class="text-center register-now">
                                <a href="{{ URL('register_now_form/'.$event->id)}}" class="btn btn-outline-secondary view-more mt-2 ">Register Now</a>
                            </div> -->

                        </div>
                        <div class="dat-and-time ">
                            <a href="download1/{{$event->id}}"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                            <i class="fa fa-calendar" aria-hidden="true"><span class="ml-2 mr-3">{{ $event->date}}</span></i>
                            <i class="fa fa-clock-o" aria-hidden="true"><span class="ml-2 mr-3">{{ date('h:i a',strtotime($event->start_time))}}</span></i>
                        </div>
                   @else
                    <!--strt events with guest name---->
              <div class="row ">
                <div class="col-md-12 this-mont-event no-gutters">
                 <div class="row mt-3 event-description-details">
                  <div class="col-md-3 event-img">
                      <img src="{{asset('/storage/images/'.$event->image_name)}}" alt="" class="">
                  </div>

                  <div class="col-md-9 event-description ">

                      <h3 class="event-title  text-center mt-2">{{ $event->event_name}}</h3>
                      <h6 class="event-description mt-4">{{ $event->event_name}} will be held on  {{ $event->date}} from {{ date('h:i a',strtotime($event->start_time))}} to  {{ date('h:i a',strtotime($event->end_time))}} at  {{ $event->venue}}
                          .It is organized by the Computer Society of Department of Computer Science, University of Jaffna. The chief guest for the event is {{ $event->guest}}. We warmly welcomes all of you.
                      </h6>


                      <!-- <div class="text-center register-now">
                          <a href="{{ URL('register_now_form/'.$event->id)}}" class="btn btn-outline-secondary view-more mt-2 ">Register Now</a>
                      </div> -->

                  </div>
                  <div class="dat-and-time ">

                      <a href="download1/{{$event->id}}"><i class="fa fa-cloud-download" aria-hidden="true"></i></a>
                      <i class="fa fa-calendar" aria-hidden="true"><span class="ml-2 mr-3">{{ $event->date}}</span></i>
                      <i class="fa fa-clock-o" aria-hidden="true"><span class="ml-2 mr-3">{{ date('h:i a',strtotime($event->start_time))}}</span></i>
                  </div>

                  @endif
                 @endif
               @endif

            @endforeach
                    </div>
                    <!--End event1---->
                    <br>

                    <br>
                    <!--strt event3---->
                    <!-- <div class="row mt-3 event-description-details">
                        <div class="col-md-3 event-img">
                            <img src="img/event/event3.jpg" alt="" class="img-fluid ">
                        </div>
                        <div class="col-md-9 event-description ">
                            <h3 class="event-title  text-center mt-2">UOJ coders</h3>
                            <h6 class="event-description mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid at alias
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores enim laudantium quisquam assumenda
                                quas repellat rerum sunt quidem consequuntur officiis sit, maxime illo rem eius, quis adipisci voluptatum id accusamus!
                            </h6>

                            <div class="text-center register-now">
                                <a href="register_now_form" class="btn btn-outline-secondary view-more mt-2 ">Register Now</a>
                            </div>
                        </div>
                        <div class="dat-and-time">
                            <i class="fa fa-calendar" aria-hidden="true"><span class="ml-2 mr-3">2020/01/02</span></i>
                            <i class="fa fa-clock-o" aria-hidden="true"><span class="ml-2 mr-3">10.00am</span></i>
                        </div>
                    </div>
                  End event3-->
                    <!-- <br> -->
                    <!--strt event4---->
                    <!-- <div class="row mt-3 event-description-details">
                        <div class="col-md-3 event-img">
                            <img src="img/event/event4.jpg" alt="" class="img-fluid ">
                        </div>
                        <div class="col-md-9 event-description">
                            <h3 class="event-title  text-center">UOJ coders</h3>
                            <h6 class="event-description mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid at alias
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores enim laudantium quisquam assumenda
                                quas repellat rerum sunt quidem consequuntur officiis sit, maxime illo rem eius, quis adipisci voluptatum id accusamus!
                            </h6>

                            <div class="text-center register-now">
                                <a href="register_now_form" class="btn btn-outline-secondary view-more mt-2 ">Register Now</a>
                            </div>
                        </div>
                        <div class="dat-and-time ">
                            <i class="fa fa-calendar" aria-hidden="true"><span class="ml-2 mr-3">2020/01/02</span></i>
                            <i class="fa fa-clock-o" aria-hidden="true"><span class="ml-2 mr-3">10.00am</span></i>
                        </div>
                    </div> -->
                    <!--End event4---->
                    <!-- <br> -->
                    <!--strt event5---->
                    <!-- <div class="row mt-3 event-description-details">
                        <div class="col-md-3 event-img">
                            <img src="img/event/event5.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-9 event-description  ">
                            <h3 class="event-title text-center">UOJ coders</h3>
                            <h6 class="event-description mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid at alias
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores enim laudantium quisquam assumenda
                                quas repellat rerum sunt quidem consequuntur officiis sit, maxime illo rem eius, quis adipisci voluptatum id accusamus!
                            </h6>

                            <div class="text-center register-now">
                                <a href="register_now_form" class="btn btn-outline-secondary view-more mt-2 ">Register Now</a>
                            </div>
                        </div>
                        <div class="dat-and-time ">
                            <i class="fa fa-calendar" aria-hidden="true"><span class="ml-2 mr-3">2020/01/02</span></i>
                            <i class="fa fa-clock-o" aria-hidden="true"><span class="ml-2 mr-3">10.00am</span></i>
                        </div> -->
                    <!-- </div> -->
                    <!--End event5---->
                    <!-- <br> -->
                    <!--strt event6---->
                    <!-- <div class="row mt-3 event-description-details">
                        <div class="col-md-3 event-img">
                            <img src="img/event/event6.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-9 event-description">
                            <h3 class="event-title  text-center">UOJ coders</h3>
                            <h6 class="event-description mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid at alias
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores enim laudantium quisquam assumenda
                                quas repellat rerum sunt quidem consequuntur officiis sit, maxime illo rem eius, quis adipisci voluptatum id accusamus!
                            </h6>
                            <div class="text-center register-now">
                                <a href="register_now_form" class="btn btn-outline-secondary view-more mt-2 ">Register Now</a>
                            </div>
                        </div>
                        <div class="dat-and-time mt-10">
                            <i class="fa fa-calendar" aria-hidden="true"><span class="ml-2 mr-3">2020/01/02</span></i>
                            <i class="fa fa-clock-o" aria-hidden="true"><span class="ml-2 mr-3">10.00am</span></i>
                        </div>
                    </div> -->
                    <!--End of all upcoming event--->
                    <br>
                </div>
            </div>
        </div>


    </section>


    <section class="past-event-gallary mt-5 mb-5">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 text-center past-event-term">
                    <h2 class="past-event-term">Previous Event Gallery</h2>
                    <h6 class="description">Enjoy the photos from our previous event</h6>
                </div>
            </div>
            <div class="row mt-5 mb-5 gallery-row">
               <!--------galary row 1---------------------------------->
               <div class="row mt-2 mb-5">
                    <div class="col-md-2">
                        <img src="img/event/album1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/event/album2.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/event/album3.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/event/album4.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/event/album5.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/event/album6.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                 <!--------end galary row 1---------------------------------->

                 <!--------galary row 2---------------------------------->
                <div class="row">
                    <div class="col-md-2">
                        <img src="img/event/album7.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/event/album8.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/event/album9.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/event/album10.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/event/album11.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="img/event/album12.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                 <!--------end galary row 2---------------------------------->

            </div>

            <div class="text-center view-more">
                <a href="/gallery" class="btn btn-outline-secondary view-more mt-2 ">view more</a>
            </div>
        </div>
    </section>

    <!-------------------- end Comtent of the betweeen navibar and footer------------------------------------------------------->


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
                    <li><a class="facebook" href="https://m.facebook.com/uojcompsoc"><i class="fa fa-facebook"></i></a></li>
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
