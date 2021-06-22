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
            <h1>Upload Event</h1>
            <h2>Competitons improve one's coding skills</h2>
            <div class="row px-1 justify-content-center mt-4 mb-5 border-line logo-image"> <img src="img/logo.jpeg" class="img-fluid"> </div>
        </div>
    </header>
  <!-- -------End Header ---------->

    <main id="main">
        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="register-title">
                    <h2>Upload Event</h2>
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
                    <form  action="{{ route('update', ['id' => $event->id]) }}" method="POST" enctype="multipart/form-data" >
                    @method('PATCH') 
                    @csrf
                    
                        <div class="form-group row">
                            <label for="event_name"> <h6 class="mb-0 text-sm">Event Name</h6></label>
                                <input id="event_name" type="text" class="form-control @error('event_name') is-invalid @enderror" name="event_name" value="{{$event->event_name}}"  placeholder="Enter name" required autocomplete="event_name" autofocus>
                        
                                @error('event_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       
                            <div class="form-group row">
                            <label for="image_name"><h6 class="mb-1 text-sm">Image</h6></label>
                             <input id="image_name" type="file" class="form-control @error('image_name') is-invalid @enderror" name="image_name" value="{{$event->image_name}}" placeholder="Enter image">
                            </div>
                            
                            <div class="form-group row">
                            <label for="date"><h6 class="mb-0 text-sm">Date</h6></label>

                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ $event->date }}" placeholder="Enter Date"  required autocomplete="date">
        
                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group row">
                            <label for="start_time"><h6 class="mb-0 text-sm">Start Time</h6></label>
                                <input id="start_time" type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time" value="{{ $event->start_time }}" placeholder="Enter email"  required autocomplete="start_time">

                                @error('start_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group row">
                            <label for="end_time"><h6 class="mb-0 text-sm">End Time</h6></label>
                                <input id="end_time" type="time" class="form-control @error('end_time') is-invalid @enderror" name="end_time" value="{{ $event->end_time }}" placeholder="Enter email"  required autocomplete="end_time">

                                @error('end_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group row">
                            <label for="guest"> <h6 class="mb-0 text-sm">Guest</h6></label>
                                <input id="guest" type="text" class="form-control @error('guest') is-invalid @enderror" name="guest" value="{{ $event->guest }}" placeholder="Enter name">
                            </div>

                            <div class="form-group row">
                            <label for="venue"> <h6 class="mb-0 text-sm">Venue</h6></label>
                                <textarea id="venue" type="text" class="form-control @error('venue') is-invalid @enderror" name="venue" rows="5"  placeholder="Enter name" required autocomplete="venue" autofocus>{{{ $event->venue }}}</textarea>
                        
                                @error('venue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                           
                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your event has been uploaded. Thank you!</div>
                            </div>
                             <div class="btn btn-secondary btn-lg"><button type="submit" class="btn btn-dark"><b>Update</b></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Us Section -->
    </main><!-- End #main -->
    <script src="js/countdown.js"></script>
</body>
</html>
<!---------
----->
