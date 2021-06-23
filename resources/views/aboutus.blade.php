<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/aboutus.css">
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
     <!--link the font awesome/icons 4.7-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                            <a class="dropdown-item" href="#" style="color:#ffffff;">Previous Events</a>
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
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
    <br>
    <div class="about-section">
        <div class="inner-container">
            <h1>Computer Society,</h1>
             <h1> University of Jaffna,</h1>
               <h1> Sri Lanka</h1>
            <p class="text">
            The Computer Society of the University of Jaffna, in short known as CompSoc, is a dynamic organization of enterprising individuals brought together by their common interest in Computing.
            Furthermore, students perform several activities through the CompSoc of the DCS such as releasing a technical newsletter named as "Kananiyam" once a year.
            Conducting seminars to recap ICT subjects and past examination papers to those students who prepare to sit for the G.C.E (O/L) and G.C.E(A/L) and organizing cultural activities.Also conduct several webinars , techtalks , competitions and workshops for students.
            All Computer Science students should join as a member of the society.
            </p>
            <div class="skills">
                <span><a class="facebook" href="https://m.facebook.com/uojcompsoc"><i class="fa fa-facebook fa-2x"></i></a></span>
                <span><a class="twitter" href="#"><i class="fa fa-twitter fa-2x"></i></a></span>
                <span><a class="instagram" href="#"><i class="fa fa-instagram fa-2x"></i></a></span>
                <span><a class="linkedin" href="#"><i class="fa fa-linkedin fa-2x"></i></a></span>
            </div>
        </div>
    </div>
    <div class="text-center" >
        <div class="copyright"> <h6 class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. All rights reserved.</h6> </div>
    </div>
    <script type = "text/javascript" src = "js/bootstrap.min.js "></script>
	<script type = "text/javascript" src = "js/Jque.js "></script>
</body>
</html>
