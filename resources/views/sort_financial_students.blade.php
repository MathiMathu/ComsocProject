<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Bootstrap Order Details Table with Search Filter</title>
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
	color: #080a81;
	background: #f5f5f5;
	font-family: 'Varela Round', sans-serif;
	font-size: 13px;

}
.table-responsive {
    position: relative;
    left: 35px;
    right: 2px;
    top: -50px;
    width: 98%;
    margin: 30px 0;
    /* width:98%; */
}
.table-wrapper {
    overflow: hidden;
    width:100%;
	background: #fff;
	padding: 20px 20px;
	border-radius: 3px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-wrapper .btn {
	float: right;
	color: #333;
	background-color: #fff;
	border-radius: 3px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-wrapper .btn:hover {
	color: #333;
	background: #f2f2f2;
}
.table-wrapper .btn.btn-primary {
	color: #fff;
	background: #03A9F4;
}
.table-wrapper .btn.btn-primary:hover {
	background: #03a3e7;
}
.table-title .btn {
	font-size: 13px;
	border: none;
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
.table-title {
	color: #fff;
	background: #000000;
	padding: 16px 25px;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.show-entries select.form-control {
	width: 60px;
	margin: 0 5px;
}
.table-filter .filter-group {
	float: right;
	margin-left: 15px;
}
.table-filter input, .table-filter select {
	height: 34px;
	border-radius: 3px;
	border-color: #ddd;
	box-shadow: none;
}
.table-filter {
	padding: 5px 0 15px;
	border-bottom: 1px solid #e9e9e9;
	margin-bottom: 5px;
}
.table-filter .btn {
	height: 34px;
}
.table-filter label {
	font-weight: normal;
	margin-left: 10px;
}
.table-filter select, .table-filter input {
	display: inline-block;
	margin-left: 5px;
}
.table-filter input {
	width: 200px;
	display: inline-block;
}
.filter-group select.form-control {
	width: 110px;
}
.filter-icon {
	float: right;
	margin-top: 7px;
}
.filter-icon i {
	font-size: 18px;
	opacity: 0.7;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th{
    color:#080a81;
}
table.table tr th:first-child {
	width: 10px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}
table.table td a {
	font-weight: bold;
	color: #080a81;
	display: inline-block;
	text-decoration: none;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.view {
	width: 30px;
	height: 30px;
	color: #2196F3;
	border: 2px solid;
	border-radius: 30px;
	text-align: center;
}
table.table td a.view i {
	font-size: 22px;
	margin: 2px 0 0 1px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.status {
	font-size: 30px;
	margin: 2px 2px 0 0;
	display: inline-block;
	vertical-align: middle;
	line-height: 10px;
}
.text-success {
	color: #10c469;
}
.text-info {
	color: #62c9e8;
}
.text-warning {
	color: #FFC107;
}
.text-danger {
	color: #ff5b5b;
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
.pagination li.active a {
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
          <a href="/treasurer">Dashboard</a>
        </div>
        <div class="sidebar__link">
          <i class="fa fa-credit-card" aria-hidden="true"></i>
          <a href="/view_finance">Finnancial Support</a>
        </div>
       <div class="sidebar__logout">
          <i class="fa fa-power-off"></i>
          <a aria-pressed="true"  href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                              <b>
                                  {{ __('Logout') }}
                              </b>
            </a>
        </div>
      </div>
    </div>
<section>
<div class="container-fluid">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-4">
                        <h2>Student <b>Details</b></h2>
                    </div>
                    <div class="col-sm-8">
                    </div>
                </div>
            </div>
            <div class="table-filter">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="show-entries">
                        </div>
                    </div>
                    <div class="col-sm-9">
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th>#</th>
                        <th>RegistrationNo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>MonthlyIncome</th>
                        <th>NoOfSiblings</th>
                        <th>FatherName</th>
                        <th>FatherOccupation</th>
                        <th>MotherName</th>
                        <th>MotherOccupation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->RegistrationNo}}</td>
                        <td>{{$student->Name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->MonthlyIncome}}</td>
                        <td>{{$student->NoOfSiblings}}</td>
                        <td>{{$student->FatherName}}</td>
                        <td>{{$student->FatherOccupation}}</td>
                        <td>{{$student->MotherName}}</td>
                        <td>{{$student->MotherOccupation}}</td>
                        <td><a href="{{ route('edit6', ['id' => $student->id]) }}" class="view" title="Give Status"><i class="material-icons">&#xE5C8;</i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
</body>
</html>
