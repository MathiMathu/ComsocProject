<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Change Password</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
</style>
<!------ Include the above in your HEAD tag ---------->

<div class="container contact">
	<div class="row">
		<div class="col-md-3">
			<div class="contact-info">
            <h2>Change</h2>
            <h3>Password</h3>
			</div>
		</div>
		<div class="col-md-9">
			<div class="contact-form">
            <form action="{{ route('updatepassword', ['id' => $user->id]) }}" method="POST">
              @csrf
              @method('PATCH')
				<div class="form-group">
				  <label class="control-label col-sm-2" for="id">ID:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="id" name="id" value="{{$user->id}}" required="required">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="Email">Email:</label>
				  <div class="col-sm-10">
					<input type="text" class="form-control" id="Email" placeholder="Enter Last Name" name="email" value="{{$user->email}}" required="required">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="password">New Password:</label>
				  <div class="col-sm-10">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{$user->password}}" required autocomplete="new-password">
				  </div>
				</div>
                <div class="form-group">
                <label for="password-confirm"><h6 class="control-label col-sm-2">Confirm New Password</h6></label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
				  </div>
				<div class="form-group">
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
                </form>
			</div>
		</div>
	</div>
</div>
