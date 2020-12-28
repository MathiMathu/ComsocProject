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
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Username</h6>
                        </label> <input class="mb-4" type="text" name="username" placeholder="Enter your Username"> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" placeholder="Enter password"> </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href='foget' class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Login</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger " href = 'register'>Register</a></small> </div>
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