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
<style>
body {
	color: #fff;
	background: #19aa8d;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	font-size: 15px;
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
</style>
</head>
<body>
<div class="signup-form">
    <form action="{{ route('update2', ['id' => $member->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
		<h2>Add Members</h2>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-calendar"></span>
					</span>                    
				</div>
				<input type="text" class="form-control" name="year" placeholder="Enter Year" value="{{$member->year}}" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<span class="fa fa-user"></span>
					</span>                    
				</div>
				<input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$member->name}}" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fa fa-tasks"></i>
					</span>                    
				</div>
                <select class="form-control" name="role"  placeholder="Enter Role" value="{{$member->role}}" required="required">
                                 <option value="" disabled selected>Enter Role</option>
                                  <option {{($member->role)=='President' ? 'selected' : ''}} value="President">President</option>
                                  <option {{($member->role)=='Secretary' ? 'selected' : ''}} value="Secretary">Secretary</option>
                                  <option {{($member->role)=='Junior Treasurer' ? 'selected' : ''}} value="Junior Treasurer">Junior Treasurer</option>
                                  <option {{($member->role)=='Editor' ? 'selected' : ''}} value="Editor">Editor</option>
                                  <option {{($member->role)=='Vice President' ? 'selected' : ''}} value="Vice President">Vice President</option>
                                  <option {{($member->role)=='Assistant Secretary' ? 'selected' : ''}} value="Assistant Secretary">Assistant Secretary</option>
                                  <option {{($member->role)=='Co-Editor' ? 'selected' : ''}} value="Co-Editor">Co-Editor</option>
                                  <option {{($member->role)=='1st Year Male Represetative' ? 'selected' : ''}} value="1st Year Male Represetative">1st Year Male Represetative</option>
                                  <option {{($member->role)=='1st Year Female Represetative' ? 'selected' : ''}} value="1st Year Female Represetative">1st Year Female Represetative</option>
                                  <option {{($member->role)=='2nd Year Male Represetative' ? 'selected' : ''}} value="2nd Year Male Represetative">2nd Year Male Represetative</option>
                                  <option {{($member->role)=='2nd Year Female Represetative' ? 'selected' : ''}} value="2nd Year Female Represetative">2nd Year Female Represetative</option>
                                  <option {{($member->role)=='3rd Year Male Represetative' ? 'selected' : ''}} value="3rd Year Male Represetative">3rd Year Male Represetative</option>
                                  <option {{($member->role)=='3rd Year Female Represetative' ? 'selected' : ''}} value="3rd Year Female Represetative">3rd Year Female Represetative</option>
                                  <option {{($member->role)=='4th Year Male Represenetative' ? 'selected' : ''}} value="4th Year Male Represenetative">4th Year Male Represenetative</option>
                                  <option {{($member->role)=='4th Year Female Representative' ? 'selected' : ''}} value="4th Year Female Representative">4th Year Female Representative</option>
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
                <input type="file" class="form-control" name="image_name"  placeholder="Enter image" value="{{$member->image_name}}">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text">
                        <span class="fa fa-graduation-cap"></span>
					</span>                    
				</div>
                <select class="form-control"  name="yearofstudy"  placeholder="Enter Year Of Study" value="{{$member->yearofstudy}}" required="required">
                             <option value="" disabled selected>Enter Year Of Study</option>
                                  <option  {{($member->yearofstudy)=='1st year Student' ? 'selected' : ''}} value="1st year Student" >1st year Student</option>
                                  <option  {{($member->yearofstudy)=='2nd year Student' ? 'selected' : ''}} value="2nd year Student" >2nd year Student</option>
                                  <option  {{($member->yearofstudy)=='3rd year Student' ? 'selected' : ''}} value="3rd year Student" >3rd year Student</option>
                                  <option  {{($member->yearofstudy)=='Final year Student' ? 'selected' : ''}} value="Final year Student" >Final year Student</option>
               
                </select>
			</div>
        </div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Update</button>
        </div>
    </form>
</div>
</body>
</html>


 