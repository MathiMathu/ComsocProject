<!DOCTYPE html>
<html>
	<head>
		<title> Seminar register</title>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "css/seminarRegistration.css">

        <!----------------------link google font for body------------------------->
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">


	</head>
	<body >
		<div class="main-w3layouts wrapper">
			<div class="content">
                <h1>Seminar Register Form</h1>
                <div class="main-agileinfo">
                    <div class="agileits-top">
                        <form method="POST" action="{{ route('store5') }}" method="POST">
					     	@csrf
                             @if($errors->any())
                              {!! implode('', $errors->all('<div class="text-center"><button type="button" class="btn btn-danger">:message</button></div>')) !!}
                             @endif
                            <input class="text" type="text" name="RegistrationNo" placeholder="RegistrationNo" required=""><br>
                            <input class="text" type="text" name="Name" placeholder="Name" required=""><br>
							<input class="text" type="text" name="Email" placeholder="Email" required=""><br>
							<!-- <input class="text" type="text" name="Place" placeholder="Place" required=""><br> -->
							<!-- <input class="text" type="text" name="Language" placeholder="Language" required=""><br> -->
							
							<!-- <input class="text" type="date" name="Date" placeholder="Date" required=""><br> -->
                              <select type="text" id="Place" name="Place" placeholder="Place" required="">
                              <option value="" disabled selected>Enter Place</option>     
                              <option value="Jaffna">Jaffna</option>
                              <option value="Kilinochchi">Kilinochchi</option>
                              <option value="Mannar">Mannar</option>
                              <option value="Mullaitivu">Mullaitivu</option>
							  <option value="Vavuniya">Vavuniya</option>
                              <option value="Puttalam">Puttalam</option>
                              <option value="Kurunegala">Kurunegala</option>
                              <option value="Gampaha">Gampaha</option>
							  <option value="Colombo">Colombo</option>
                              <option value="Kalutara">Kalutara</option>
                              <option value="Anuradhapura">Anuradhapura</option>
                              <option value="Polonnaruwa">Polonnaruwa</option>
							  <option value="Matale">Matale</option>
                              <option value="Kandy">Kandy</option>
                              <option value="Nuwara Eliya">Nuwara Eliya</option>
                              <option value="Kegalle">Kegalle</option>
							  <option value="Ratnapura">Ratnapura</option>
                              <option value="Trincomalee">Trincomalee</option>
                              <option value="Batticaloa">Batticaloa</option>
                              <option value="Ampara">Ampara</option>
							  <option value="Badulla">Badulla</option>
                              <option value="Monaragala">Monaragala</option>
                              <option value="Hambantota">Hambantota</option>
                              <option value="Matara">Matara</option>
							  <option value="Galle">Galle</option>
                            </select><br>
							 <select  class="text" type="text" id="Language" name="Language" placeholder="Language" required="">
                              <option value="" disabled selected>Enter Language</option>   
                              <option value="Tamil">Tamil</option>
                              <option value="Sinhala">Sinhala</option>
                              <option value="English">English</option>
						    </select><br>
                            <input class="text" type="date" name="Date" placeholder="Date" required=""><br>
							<input type="submit" value="RegisterNow">
                           
                        </form>
                    </div>
                </div>
            </div>
			<!-- copyright -->
			<div class="checking" >
				<p>Copyright © 2020 All Rights Reserved by <a href="#"	target="_blank">Computer Society University of Jaffna.</a></p>
			</div>

		</div>


		<script type = "text/javascript" src = "js/bootstrap.min.js "></script>
		<script type = "text/javascript" src = "js/Jque.js "></script>
	</body>
</html>
