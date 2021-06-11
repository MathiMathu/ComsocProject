

@section('content')
<!DOCTYPE html>
<html>
	<head>
		<title> Login</title>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
        
		<!-----link boostrap----->
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
        <!-----link css Style----->
		<link rel = "stylesheet" type = "text/css" href = "css/logstyle.css">

	<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=1A4QiQUUqZ8HnIaocs5E2BxM2T2d1scHPoPoLH3aJSKJRb2QyDGcg80LPrHdF4n_ZNUXTnYXV0FzQ9Igf7A_3pAXYu6eD--TmMnSzTpPXLvt4vBHiPUYcoHcpG4D4V_X24kGoyNEvRJAiv1WZG-My2gxsm2KekIGzo8YBEFU-Ob2Is5tOrpVtqIC9MRmv4b7jc2R6c0NPnFivrwLyMAb5qxftKWxfltIZc2y2ew8aauRAuIqa5FqJECb279bW0u1c9MEbe9bketmXH-t5BwyjffJwvaiRMR3xUP-1DH1b6Jk3k-4sBhCAFh4huq6pyze9qrUaJvbgRtO_4hk6WLBc1WWP54YvFW6QOoSr5nE_3ENg9RKUUSQc6qMG-PlShJWiw0bJOP3VEdI4wwYPYdCMOshLAYM1H1_HUCcLSE0ISqr3eKbXFqoFa_fXWvnb3UT3T-Rs8Isx0qWteu7JhpGqQAOLAN8Yb8G2tcduD2uBO0QPqcF5M6TiN33CFvxbDoYFRpWzfAAVxl1BLjPZMG9oUryMPPnc6_EgIW-Oxt452Bpu9SVOd1nR2Q5hjwYyP9NCUR2kDo8U7DyRPZlaX1urGsZfwhQmHOu5mupHeXwGcIFMyfJAiZVHXu1qovlJ2kjKWifLwM1AkaDN-RsNX7qqgTju4puocjnQssPTgb5jhvp4nkv-rZDq4dXmx5vpCYhA7PPPlzz51OlD-9yOmxsYqTtdJZkUYy5k8T26VBBEndgZj4DUEShwTVej_txPEkn3gUOo-XMnyW91VBYiQTqBAr4PBgf9GxWIEQFHHqZt1KfyDdxlS68kOYVB_rY3POA77g-VSd8aJjRN3WaezGw25APN_8wmL6gCd8HqEl-1m6YDuMXmv4987OYfYjgWmk6aVKGgAMy3BNeNZ0vExek5YENyHjOsDbdZJmKlDF2ATu2HPCF9p_83Jkq3w0jhDVJI2_Axeib2QMNO_mXdoiIltAVqxuejB6U3EDKy0QuzMXUBrm0lpLCMAYE2q8HRz6awIrsvFjPTvrlXJndRd4YbgiRI4DVXS35L620syaY2htssdonMfBAA_0fZVueG7GB5b9EWDNzJEH5_b7DGVhFjR-kESta9aV-JBg9npZAQcfP_4OHM5Mpl_5Qn6kf76O1ZKQkjGXM5J08c7a8I8O2bzedU-PWTkR2cUd72_Gnjzc" nonce="ed738ab8541f5b2987e268aad3b56be0" charset="UTF-8"></script></head>
	<body>
		<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
					<div><br><br><br></div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line logo-image"> <img src="img/logo.jpeg" class="img-fluid"> </div>
                </div>
            </div>
<div class="col-lg-6">
 <div class="card1 card border-0 px-4 py-5">
    <div><br><br><br></div>            

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                  
                        <div class="form-group row">
                        
                            <label for="email"> <h6 class="mb-0 text-sm">Username</h6></label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group row">
                            <label for="password"><h6 class="mb-0 text-sm">Password</h6></label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                    
                    <div class="form-group row">
                        
                        <div class="form-check">
                          
                          <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                          
                          <label class="custom-control-label text-sm" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                         </div> 
                    </div>
                        
                       
                      

                        <div class="form-group row mb-0">
                            
                                <button type="submit" class="btn btn-blue text-center">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="foget">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            
                        </div>
                        <p></p>
                        @if($errors->any())
                              {!! implode('', $errors->all('<div class="alert alert-danger" role="alert">:message</div>')) !!}
                        @endif
                    </form>
                   
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">
                    <br>
                    Don't have an account? 
                    <a class="text-danger " href = 'register'>Register</a></small> </div>
                </div> 
            </div>
        </div>
   
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2020. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
		<script type = "text/javascript" src = "js/bootstrap.min.js "></script>
		<script type = "text/javascript" src = "js/Jque.js "></script>
	</body>
</html>

