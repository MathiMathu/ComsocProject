<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Registered Users</title>
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
    top: -50px;
    width: 100%;
    margin: 30px 0;
    width:98%;
}
.table-wrapper {
    /* min-width: 1150px; */
    width:98%;
	background: #fff;
	padding: 10px 15px;
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
	background: #080a81;
}
.table-wrapper .btn.btn-primary:hover {
	background: #080a81;
}
.fa-filter{
    color: #32f70b;
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
	width: 80px;
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
	opacity: 1;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th{
    color:#080a81;
}
table.table tr td{
    opacity: 1;
    color:#055e5e;
}
table.table tr th:first-child {
	width: 10px;
}
table.table tr th:last-child {
	width: 150px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 10px;
	margin: 0 0px;
	cursor: pointer;
}
table.table td a {
	font-weight: bold;
	color: #566787;
	display: inline-block;
	text-decoration: none;
}
table.table td a:hover {
	color: #2196F3;
}
table.table td a.view {
	width: 100px;
	height: 1000px;
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


.search-box {
    position: relative;
    float: right;
}
.search-box .input-group {
    min-width: 300px;
    position: absolute;
    right: 0;
}
.search-box .input-group-addon, .search-box input {
    border-color: #ddd;
    border-radius: 0;
}
.search-box input {
    height: 34px;
    padding-right: 35px;
    background: #f4fcfd;
    border: none;
    border-radius: 2px !important;
}
.search-box input:focus {
    background: #fff !important;
}
.search-box i:focus {
    background: #fff !important;
}
.search-box input::placeholder {
    font-style: italic;
}
.search-box .input-group-addon {
    min-width: 35px;
    border: none;
    background: transparent;
    position: absolute;
    right: 0;
    z-index: 9;
    padding: 6px 0;
}
.search-box i {
    color: #a0a5b1;
    font-size: 19px;
    position: relative;
    top: 2px;
}
</style>
<script>
$(document).ready(function(){
	// Activate tooltips
	$('[data-toggle="tooltip"]').tooltip();

	// Filter table rows based on searched term
    $("#search").on("keyup", function() {
        var term = $(this).val().toLowerCase();
        $("table tbody tr").each(function(){
            $row = $(this);
            var name = $row.find("td:nth-child(2)").text().toLowerCase();
            console.log(name);
            if(name.search(term) < 0){
                $row.hide();
            } else{
                $row.show();
            }
        });
    });
});
</script>
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
            <h1>CompSoc</h1>
        </div> --}}
        <div class="sidebar__link active_menu_link">
          <i class="fa fa-home"></i>
          <a href="/admin">Dashboard</a>
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
                        <div class="col-sm-6">
                            <h2>Registered <b>Users</b></h2>
                        </div>
                        <div class="col-sm-6">
                        <form action="{{route('compute20')}}" method = "GET">
                            <div class="search-box">
                                <div class="input-group">
                                    <h6 style="color:white; position:relative;left:-10px; top:10px;">Search Here</h6>
                                <input type="text" id="search" name="search" class="form-control" placeholder="Enter the Email" required>
                                    <button type="submit" class="input-group-addon"><i class="material-icons">&#xE8B6;</i></button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Registration No</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Password</th>
                        <th>profile</th>
                        <th>Phone</th>
                        <th>Profession</th>
                     </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->regNo}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->is_admin}}</td>
                        <td>{{$user->password}}</td>
                        <td><img src= "{{ asset('storage/images/'.$user->profile)}}" style="max-width:60px;"/></td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->profession}}</td>
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


