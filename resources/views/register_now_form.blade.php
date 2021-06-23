<?php
use Illuminate\Support\Facades\DB;
use App\Models\Event;
use App\Models\Register;
use Carbon\Carbon;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Register Now</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <base href="/public">
  <!--link the font awesome/icons 4.7-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files  -->
 <link href="css/bootstrap.min.css"  href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet" type='text/css' />


  <!-- Template Main CSS File -->
  <link  href="{{asset('css/style_form.css') }}" rel="stylesheet" type='text/css'/>


</head>

<body>

  <!-- ------- Header ---------->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center">
            <h1>Register Available</h1>
            <h2></h2>
            <div id="demo">
                @foreach ($users as $event)


                <script>


                    // Set the date we're counting down to
                    var countDownDate = new Date("{{$event->date}}").getTime();
                   // var countDownDate = new Date("{{$event->date}}").getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                    // Get today's date and time
                    var now = new Date().getTime();

                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;

                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                    if(days<10)
                    {
                        days="0"+days;
                    }
                    if(hours<10){
                            hours="0"+hours;
                        }

                    if(minutes<10){
                        minutes="0"+minutes;
                        }

                    if(seconds<10){
                        seconds="0"+seconds;
                    }
                    // Display the result in the element with id="demo"
                    document.getElementById("demo").innerHTML = days + ":" + hours + ":"
                    + minutes + ":" + seconds + "";

                    // If the count down is finished, write some text
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("demo").innerHTML = "EXPIRED";
                    }
                    }, 1000);
                </script>

            </div>
        </div>
    </header>
  <!-- -------End Header ---------->

    <main id="main">
        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="register-title">
                    <h2>Register Now</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h4>Location:</h4>
                                    <p>CUL1<br>Department of Computer Science
                                    <br>University of Jaffna</p>
                                </div>
                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h4>Email:</h4>
                                    <p>comsoc@univ.jfn.ac.lk</p>
                                </div>
                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h4>Call:</h4>
                                    <p>021 221 8194</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row  justify-content-center">
                    <div class="col-lg-10">
                    <form  class="register-now-form" action="{{ route('store30') }}" method="POST">
                        @csrf
                  <input type="hidden" id="event_name" name="event_name" value="{{$event->event_name}}">
                  @endforeach
                           <div class="form-group row">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Enter name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                 <input id="regNo" type="text" class="form-control @error('regNo') is-invalid @enderror" name="regNo" value="{{ old('regNo') }}" placeholder="Enter Registration number Eg: 2017/CSC/001"  required autocomplete="regNo">

                                @error('regNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email"  required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <input id="yos" type="text" class="form-control @error('yos') is-invalid @enderror" name="yos" value="{{ old('yos') }}" placeholder="Enter Year Of Study"  required autocomplete="yos">

                                @error('yos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                                <textarea class="form-control" name="message" rows="5"  placeholder="Message"></textarea>
                                 <div class="validate"></div>
                            </div>
                            <div class="mb-3">
                                <div class="loading"></div>
                                <div class="error-message"></div>
                                <div class="sent-message"></div>
                            </div>
                             <div class="text-center"><button type="submit">Register</button></div>
                             <p></p>

                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Us Section -->
    </main><!-- End #main -->
    <script  src="{{ asset('js/countdown.js') }}"></script>
</body>
</html>
<!---------
----->
