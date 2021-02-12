<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
	  <link rel = "stylesheet" type = "text/css" href = "css/footer.css"> 

    
    <title>Sort Registered Students</title>

 <!-----link google font for body----->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Main CSS-->
    <link href="css/articleFormStyle.css" rel="stylesheet" media="all"> 
</head>

<body>
    
         <div class="wrapper-top wrapper--w900-top">
            <div class="card-top card-6-top">
            <br></br>
            <div class="card-heading-top">
                    <h2 class="text-success">List of Students</h2>
                </div>
                
                <!-- <div class="card-heading-top">
                    <h2 class="title">List of Students</h2>
                </div> -->
                <div class="card-body-top">
                  <table class="table table-bordered">
                    <thead style="border:1px solid gray">
                      <tr>
                        <th>Name</th>
                        <th>Registration_Number</th>
                        <th>email</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach ($students as $student)
                      <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->regNo }}</td>
                                <td>{{ $student->email }}</td>
                      </tr>          
                     @endforeach
                      
                    </tbody>
                  </table>  
</div>
 </div>
 </div> 
   </div>
     </div>
  <script type = "text/javascript" src = "js/bootstrap.min.js "></script>
		<script type = "text/javascript" src = "js/Jque.js "></script>
	</body>
</html>


