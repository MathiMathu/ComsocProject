<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Add Member</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style_slide_bar1.css">
    <link rel="stylesheet" href="css/style_slide_bar2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
body {
	color: #fff;
	background: #000000;
	font-family: 'Roboto', sans-serif;
    overflow: hidden;
}
.form-control {
	font-size: 15px;
}
form{
    position: relative;
    top: -30px;
}
.form-control, .form-control:focus, .input-group-text {
	border-color: #e1e1e1;
}
.form-control, .btn {
	border-radius: 3px;
}
.signup-form {
	width: 400px;
	margin: 0 auto;
	padding: 30px 0;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #fff;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form h2 {
	color: #333;
	font-weight: bold;
	margin-top: 0;
}
.signup-form hr {
	margin: 0 -30px 20px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form label {
	font-weight: normal;
	font-size: 15px;
}
.signup-form .form-control {
	min-height: 38px;
	box-shadow: none !important;
}
.signup-form .input-group-addon {
	max-width: 42px;
	text-align: center;
}
.signup-form .btn, .signup-form .btn:active {
	font-size: 16px;
	font-weight: bold;
	background: #19aa8d !important;
	border: none;
	min-width: 140px;
}
.signup-form .btn:hover, .signup-form .btn:focus {
	background: #179b81 !important;
}
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #19aa8d;
	text-decoration: none;
}
.signup-form form a:hover {
	text-decoration: underline;
}
.signup-form .fa {
	font-size: 21px;
}
.signup-form .fa-paper-plane {
	font-size: 18px;
}
.signup-form .fa-check {
	color: #fff;
	left: 17px;
	top: 18px;
	font-size: 7px;
	position: absolute;
}
.botom-part{
    position: relative;
    top:-30px;
}

</style>
</head>
<body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">

      <header>Com Soc</header>
      <div class="sidebar__menu">
        {{-- <div class="sidebar__img">
            <img src="img/logo.png" alt="logo" />
            <h1>ComSoc</h1>
        </div> --}}
        <div class="sidebar__link active_menu_link">
          <i class="fa fa-home"></i>
          <a href="#">Dashboard</a>
        </div>

        <div class="sidebar__link">
          <i class="fa fa-user-secret" aria-hidden="true"></i>
          <a href="#">Admin Management</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-user" aria-hidden="true"></i>
          <a href="#">User Management</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-users" aria-hidden="true"></i>
          <a href="#">Society Member</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-birthday-cake" aria-hidden="true"></i>
          <a href="#">Cs Park</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-credit-card" aria-hidden="true"></i>
          <a href="#">Finnancial Support</a>
        </div>

        <div class="sidebar__link">
          <i class="fa fa-calendar" aria-hidden="true"></i>
          <a href="#">Events</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-book" aria-hidden="true"></i>
          <a href="#">Karaniyam</a>
        </div>
        <div class="sidebar__logout">
          <i class="fa fa-power-off"></i>
          <a href="#">Log out</a>
        </div>
      </div>
    </div>
<div class="signup-form">
    <form action="{{ route('store2') }}" method="post" enctype="multipart/form-data">
      @csrf
		<h2>Add Members</h2>
		<p>Please fill
        this form again and again until all members are entered!</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-calendar"></span>
					</span>
				</div>
				<input type="text" class="form-control" name="year" placeholder="Enter Year" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-user"></span>
					</span>
				</div>
				<input type="text" class="form-control" name="name" placeholder="Enter Name" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-tasks"></i>
					</span>
				</div>
                <select class="form-control" name="role"  placeholder="Enter Role"  required="required">
                                  <option value="" disabled selected>Enter Role</option>
                                  <option value="President">President</option>
                                  <option value="Secretary">Secretary</option>
                                  <option value="Junior Treasurer">Junior Treasurer</option>
                                  <option value="Editor">Editor</option>
                                  <option value="Vice President">Vice President</option>
                                  <option value="Assistant Secretary">Assistant Secretary</option>
                                  <option value="Co-Editor">Co-Editor</option>
                                  <option value="1st Year Male Represetative">1st Year Male Represetative</option>
                                  <option value="1st Year Female Represetative">1st Year Female Represetative</option>
                                  <option value="2nd Year Male Represetative">2nd Year Male Represetative</option>
                                  <option value="2nd Year Female Represetative">2nd Year Female Represetative</option>
                                  <option value="3rd Year Male Represetative">3rd Year Male Represetative</option>
                                  <option value="3rd Year Female Represetative">3rd Year Female Represetative</option>
                                  <option value="4th Year Male Represenetative">4th Year Male Represenetative</option>
                                  <option value="4th Year Female Representative">4th Year Female Representative</option>
                            </select>
			          </div>
                 </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-file-image-o"></span>
					</span>
				</div>
                <input type="file" class="form-control" name="image_name"  placeholder="Enter image" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
                        <span class="fa fa-graduation-cap"></span>
					</span>
				</div>
                <select class="form-control"  name="yearofstudy"  placeholder="Enter Year Of Study"  required="required">
                             <option value="" disabled selected>Enter Year Of Study</option>
                             <option value="1st year Student">1st year Student</option>
                             <option value="2nd year Student">2nd year Student</option>
                             <option value="3rd year Student">3rd year Student</option>
                             <option value="Final year Student">Final year Student</option>

                </select>
			</div>
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Add</button>
        </div>
    </form>
	<div class="text-center botom-part">Entered All members!<a href="{{ url('view_members') }}" class="btn btn-primary btn-lg">End</a></div>
</div>

</body>
</html>
