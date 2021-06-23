

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 150px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
tbody {
    text-align: center;
}
.required:after{
  content:"*";
  color:red;
  font-weight:bold;
  font-size:25px;
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
						<h2>Upload <b>Images</b></h2>
					</div>
					<div class="col-sm-6">
						
					</div>
				</div>
			</div>
   </div>
	</div>
</div>
<tbody>
<div class="container-lg">
<h2 class="well">Gallery</h2>
<form method="post" action="{{url('file')}}" enctype="multipart/form-data">
    @csrf
    <div class="input-group hdtuto control-group lst increment" >
    <label class="required"></label>
  <input type="text" class="form-control @error('Event_Name') is-invalid @enderror" name="Event_Name" placeholder="Enter Event Name" required>
  </div>
  <br>
  <div class="input-group hdtuto control-group lst increment" >
  <label class="required"></label>
  <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" placeholder="Enter Date" required>
  </div>
  <br>
  <div class="input-group hdtuto control-group lst increment" >
  <label class="required"></label>
  <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Enter description" required>
  </div>
  
  
  <div class="clone hide">
      <div class="hdtuto control-group lst input-group" style="margin-top:10px">
  <input type="file" id="files" name="filenames[]" multiple />
  </div>
      </div>
      <br></br>
      <div class="input-group hdtuto control-group lst increment" >
  
  </div>
<button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
@if($errors->any())
   {!! implode('', $errors->all('<div class="text-center"><button type="button" class="btn btn-danger">:message</button></div>')) !!}
 @endif
</form>   
</div>
</div>
</section>
<script>
$(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "</span>").insertAfter("#files");         
        });
        fileReader.readAsDataURL(f);
      }
      console.log(files);
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>
</tbody>
</html>




