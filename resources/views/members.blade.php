<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>members</title>
    <!--link style navibar and slider-->
    <link rel = "stylesheet" type ="text/css" href ="css/member.css">


   <!----------------------link google font for website name------------------------->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&family=Texturina:ital,wght@1,100&display=swap" rel="stylesheet">

     <!----------------------link google font for body------------------------->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	{{-- <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=v6HePCTnT6Z0HoRqAnrN84RI9LNaEztjACmbi70896NcVWOwpUEAV75w22zaJwFoGrU8UT_8Mu83kcORnkhBTK3YIIza3IvA4wicuw85IsMDzi7g_eBCL2M8sLlyv3B_puWdyO8Q6IjIxudA0qVwp6TPiAslUFASojXN3XnpgcDUIEjqJR759_IoCTZIMvSMvFUBHSbvj7ZRfvOEQhLiH0PTnvBd3w5hZsOu7EuaCjosZohatxu9mpHL96Dq6tbctI7hnUKs864AfPb08onoqdK7SvJTKdOd8YqttHzAQn-ksn5-VatlBQAnDtO-LPXmyiWNge7Xub1Vrj6swdAOsGbP3wtecStM0erT0py1lka_p9XdX4pumayu05MATm3MevONzOOLxRVQQLngZBStCxmDKww08DWuYxugAWOpSKR5T5qh6Od-nGbmhu08V08Aj-XObNTOo9JvsFJjMiZpRA" charset="UTF-8"></script></head> --}}

    <!--link the font awesome/icons 4.7-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

       <!----------------------link google font for body------------------------->
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    		<!-- Team -->
<section id="team" class="pb-5">

  <div class="container section-content">
      <h5 class="section-title h1">Meet Our Team</h5>
      <div>
          <div class="col-md-4">
              <div class="form-group age-selection">
              <form method="POST" action="{{ route('compute1') }}">
                 @csrf
                  <span class="form-label" style="color : #1100ff;"> <h5>Year</h5></span>
                  <select class="form-control" name="year">
                     {{ $last = date('Y')-10 }}
                     {{ $now = date('Y')}}
                      @for($i=$now;$i>$last;$i--)
                      <option value="" disabled selected></option>
                      <option value="{{$i}}"> <h6>{{$i}}</h6> </option>
                      @endfor
                  </select>
                  <!-- <span class="select-arrow"></span> -->
                  <button type="submit" class="btn btn-primary" style="color : #1100ff;"></button>
                </form>
                <div>

                </div>
              </div>
              <br>
          </div>
      </div>
      <br>
      <div class="row member-detail">
          <!-- Team member -->
        @if (collect($students)->isEmpty())
          <h2 class="ml-5 ml-sm-5 mb-5">Data is not available for current selected year</h2><br>
        @else
        @foreach ($students as $student)
        <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" >
                  <div class="mainflip flip-0">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="{{asset('/storage/images/'.$student->image_name)}}" alt="card image"></p>
                                  <h4 class="card-title">{{ $student->name}}</h4><br>
                                  <h5>{{ $student->role}}</h5>
                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">{{ $student->name}}</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">{{ $student->yearofstudy}}, Department of Computer Science, University of Jaffna.</p>
                                  <br>

                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          @endforeach
          @endif
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member2.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4><br>
                                  <h5>Secretary</h5>
                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">Final year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member3.jpeg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>Junior Treasurer</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">Final year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member4.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>Editor</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">Final year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member5.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>Vice President</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">Final year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member1.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>Assistant Secretary</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">Final year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member2.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>Co-Editor</h5>
                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">Final year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member3.jpeg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>1st Year Male Represetative</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">1st year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member4.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>1st Year Female Represetative</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">1st year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member5.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>2nd Year Male Represetative</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">2nd year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member1.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>2nd Year Female Represetative</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">2nd year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member2.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>3rd Year Male Represetative</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">3rd year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member3.jpeg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>3rd Year Female Represetative</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">3rd year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member4.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <h5>4th Year Male Represenetative</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">Final year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
          <!-- Team member -->
          <!-- <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                  <div class="mainflip">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="img/member5.jpg" alt="card image"></p>
                                  <h4 class="card-title">Mr.Tharindu prasad ranaweera</h4>
                                  <br>
                                  <h5>4th Year Female Representative</h5>

                              </div>
                          </div>
                      </div>
                      <div class="backside">
                          <div class="card">
                              <div class="card-body text-center mt-4">
                                  <h4 class="card-title">Mr.Sanoos</h4>
                                  <br>
                                  <br>
                                  <p class="card-text">Final year Student, Department of Computer Science, University of Jaffna.</p>
                                  <br>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-facebook"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div> -->
          <!-- ./Team member -->
      </div>
      <br>
      <div class="text-center" >
          <div class="copyright"> <h6 class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. All rights reserved.</h6> </div>
      </div>
  </div>
</section>
<!-- Team -->
      <script type = "text/javascript" src = "js/bootstrap.min.js "></script>
      <script type = "text/javascript" src = "js/Jque.js "></script>

</body>
</html>
