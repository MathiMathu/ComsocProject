<!DOCTYPE html>
<html>
	<head>
		<title> Financial Support</title>
		<meta charset = "utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale = 1">
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
        <link rel = "stylesheet" type = "text/css" href = "css/FinancialStyle.css">

        <!----------------------link google font for body------------------------->
       <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	
	<body style = "background-color: rgb(68, 67, 67);">
		<div class="main-w3layouts wrapper application-title">
			<h1>Financial Support Application Form</h1>
			<div class="main-agileinfo">
				<div class="agileits-top ">
					<form method="post" action="saveFinancialsupport">
					@csrf
					    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-center"><button type="button" class="btn btn-danger">:message</button></div>')) !!}
                        @endif
						<input class="text" type="text" name="RegistrationNo" placeholder="Enter Registration No" required=""><br>
						@error('RegistrationNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<input class="text" type="text" name="Name" placeholder=" Enter Name" required=""><br>
						@error('Name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<input class="text" type="text" name="MonthlyIncome" placeholder="Enter Monthly Income" required=""><br>
						@error('MonthlyIncome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<input class="text" type="text" name="NoOfSiblings" placeholder="Enter No Of Siblings" required=""><br>
						@error('NoOfSiblings')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<input class="text" type="email" name="email" placeholder="Enter Email" required=""><br>
						@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<input class="text" type="text" name="FatherName" placeholder="Enter Father Name" required=""><br>
						@error('FatherName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<input class="text" type="text" name="FatherOccupation" placeholder="Enter Father Occupation" required=""><br>
						@error('FatherOccupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<input class="text" type="text" name="MotherName" placeholder="Enter Mother Name" required=""><br>
						@error('MotherName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<input class="text" type="text" name="MotherOccupation" placeholder="Enter Mother Occupation" required=""><br>
						@error('MotherOccupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
						<input class="text" type="hidden" name="action">

						<div class="wthree-text">
							<label class="anim">
								<input type="checkbox" class="checkbox" required="">
								<span>I Agree To The Terms & Conditions</span>
							</label>
							<div class="clear"> </div>
						</div>
						<input type="submit" value="Apply Now">

					</form>
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
