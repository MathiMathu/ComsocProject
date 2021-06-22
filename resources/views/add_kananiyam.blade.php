<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Add Kananiyam</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!--link the font awesome/icons 4.7-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files  -->
  <link href="css/bootstrap.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="css/style_kananiyam.css" rel="stylesheet">

  <style>
      .form-content{
          width:600px;
          height: auto;
          justify-content: center;
          text-align: center;
          position: relative;
          left: 23%;
          background-color:rgb(3, 17, 56);
          opacity: .7;
          top: 40px;
          color: white;

      }
      form{
          margin-top: 15px;
          margin-bottom: 15px;
          position: relative;
          opacity: 1;
      }
  </style>


</head>

<body>

  <!-- ------- Header ---------->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex flex-column align-items-center">
            <h1>Upload Kananiyam</h1>
            <h2></h2>
            <div class="row px-1 justify-content-center mt-4 mb-5 border-line logo-image"> <img src="img/logo.jpeg" class="img-fluid"> </div>
        </div>
    </header>
  <!-- -------End Header ---------->

    <main id="main">
        <!-- ======= Contact Us Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="register-title">
                    <h2>Upload Article</h2>
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

                <div class="row  justify-content-center form-content">
                    <div class="col-lg-10">
                    <form method="POST" action="add_article"  enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="RegistrationNo"> <h6 class="mb-0 text-sm">Registration No</h6></label>
                                <input id="RegistrationNo" type="text" class="form-control @error('RegistrationNo') is-invalid @enderror" name="RegistrationNo" value="{{ old('RegistrationNo') }}" placeholder="Enter Registration Number" required autocomplete="RegistrationNo" autofocus>

                                @error('RegistrationNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <label for="Name"> <h6 class="mb-0 text-sm"> Name</h6></label>
                                <input id="Name" type="text" class="form-control @error('Name') is-invalid @enderror" name="Name" value="{{ old('Name') }}" placeholder="Enter Name" required autocomplete="Name" autofocus>

                                @error('Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <label for="Title"> <h6 class="mb-0 text-sm">Article Title</h6></label>
                                <input id="Title" type="text" class="form-control @error('Title') is-invalid @enderror" name="Title" value="{{ old('Title') }}" placeholder="Enter Article Title" required autocomplete="Title" autofocus>

                                @error('Title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                            <div class="form-group row">
                            <label for="Article"><h6 class="mb-1 text-sm">Upload</h6></label>
                                <input id="Article" type="file" class="form-control @error('Article') is-invalid @enderror" name="Article" value="{{ old('Article') }}" placeholder="Upload Article"  required autocomplete="Article">

                                @error('Article')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <input class="text" type="hidden" name="action">
                            {{-- <div class="form-group row">
                            <label for="date"><h6 class="mb-0 text-sm">Date</h6></label>
                                <input id="date" type="date" class="form-control @error('date') is-invalid @enderror" name="date" value="{{ old('date') }}" placeholder="Eg: 2017/CSC/001"  required autocomplete="date">

                                @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                            {{-- <div class="form-group row">
                            <label for="start_time"><h6 class="mb-0 text-sm">Start Time</h6></label>
                                <input id="start_time" type="time" class="form-control @error('start_time') is-invalid @enderror" name="start_time" value="{{ old('start_time') }}" placeholder="Enter email"  required autocomplete="start_time">

                                @error('start_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                            {{-- <div class="form-group row">
                            <label for="end_time"><h6 class="mb-0 text-sm">End Time</h6></label>
                                <input id="end_time" type="time" class="form-control @error('end_time') is-invalid @enderror" name="end_time" value="{{ old('end_time') }}" placeholder="Enter email"  required autocomplete="end_time">

                                @error('end_time')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                            {{-- <div class="form-group row">
                            <label for="guest"> <h6 class="mb-0 text-sm">Guest</h6></label>
                                <input id="guest" type="text" class="form-control @error('guest') is-invalid @enderror" name="guest" value="{{ old('guest') }}" placeholder="Enter name">
                            </div> --}}

                            <div class="form-group row">
                            <label for="description"> <h6 class="mb-0 text-sm">Description</h6></label>
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" rows="5" value="{{ old('description') }}" placeholder="Enter Small Description Here" required autocomplete="description" autofocus></textarea>

                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="mb-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your Article has been uploaded. Thank you!</div>
                            </div>
                             <div class="btn btn-secondary btn-lg"><button type="submit" class="btn btn-dark"><b>Create</b></button></div>
                             @if($errors->any())
                         {!! implode('', $errors->all('<div class="text-center"><button type="button" class="btn btn-danger">:message</button></div>')) !!}
                         @endif
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
