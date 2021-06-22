<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <!--link style navibar and slider-->
    


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


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<!------ Include the above in your HEAD tag ---------->
<style>
body{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
    color: #818182;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #0062cc;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
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
</style>
<div class="container emp-profile">
@foreach($userData as $a)
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-2 event-img">
                        @if(empty($a->profile))
                        <img src="{{URL::asset('/image/default.jpg')}}" alt="profile Pic" height="200" width="200">
                        @else
                        <img src="{{asset('/storage/images/'.$a->profile)}}"/>
                        @endif
                        </div>
                    </div>
                  
                    <div class="col-md-4">
                        <div class="profile-head">
                                    <h1><b>
                                    {{ $a->name}}
                                    </b>
                                    </h1>
                                   
                                    <p class="proile-rating"> <span></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                             </ul>   
                                <h4>
                                    {{ $a->profession}}
                                </h4>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-md-2">
                    </div> -->
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Profile</p>
                            @if($a->is_admin==0)
                            <a class="nav-link" href="/home">Dashboard</a>
                            @elseif($a->is_admin==1)
                            <a class="nav-link" href="/admin">Dashboard</a>
                            @elseif($a->is_admin==2)
                            <a class="nav-link" href="/treasurer">Dashboard</a>
                            @else
                            <a class="nav-link" href="/editor">Dashboard</a>
                            @endif
                            <a class="nav-link" href="{{ route('edit11', ['id' => $a->id]) }}">Edit Profile</a>
                            <a class="nav-link" href="{{ route('changepassword1', ['id' => $a->id]) }}">Change Password</a>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $a->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Registration Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $a->regNo }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $a->email}}</p>
                                            </div>
                                        </div>
                        @endforeach
                                       <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p> {{ $a->profession}} </p>  
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                            <p> {{ $a->phone}} </p> 
                                            </div>
                                        </div>
                                        
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
</HTML>        