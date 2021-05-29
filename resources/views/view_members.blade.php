

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Members List</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/style_slide_bar1.css">
<link rel="stylesheet" href="css/style_slide_bar2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

<style>
body {
	color: #566787;
    color: #404E67;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;
}
.table-responsive {
    position: relative;
    left: 35px;
    top: -50px;
    width: 100%;
    margin: 30px 0;
    width:98%;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
	padding-bottom: 15px;
	background: #000000;
	color: #fff;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}

.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}
.pagination li.active a, .pagination li.active a.page-link {
	background: #03A9F4;
}
.pagination li.active a:hover {
	background: #0397d6;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}

.table-wrapper1 {
    background: #fff;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    padding: 20px 25px;
  	border-radius: 3px;
	  min-width: 1000px;

}
.table-title1 {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title1 h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title1 .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title1 .add-new i {
    margin-right: 4px;
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
<section>
<div class="container-fluid">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Members</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="{{ url('add_member') }}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Add New Members</span></a>
					</div>
				</div>
			</div>
   </div>
	</div>
</div>

<div class="container-lg">
    <div class="table-responsive">
        <div class="table-wrapper1">
          @for($i=date('Y');$i >= date('Y')-10;$i--)
            <div class="table-title1">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Year</b></h2></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>{{$i}}</button>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                   <td>Name</td>
                   <td>Image Name</td>
                   <td>Role</td>
                   <td>Year Of Study</td>
                   <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($members as $member)
                @if($member->year == $i)
                <tr>
                    <td>{{$member->name}}</td>
                    <td>{{$member->image_name}}</td>
                    <td>{{$member->role}}</td>
                    <td>{{$member->yearofstudy}}</td>
                    <td>
                    <a href="{{ route('edit2', ['id' => $member->id]) }}" class="edit" title="Edit"><i class="material-icons">&#xE254;</i></a>
                    <a href="{{ route('delete2', ['id' => $member->id]) }}" class="delete" title="Delete"><i class="material-icons">&#xE872;</i></a>
                    </td>
              </tr>
              @endif
              @endforeach
             </tbody>
            </table>
            @endfor
        </div>
    </div>
</div>
</div>
</section>
</html>

