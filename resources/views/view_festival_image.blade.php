<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>festival Images</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        body{
            width: 100%;
            background:linear-gradient(315deg,#ffffff,#02001a);
            family: 'Frank Ruhl Libre', serif;
        }
        .inside-page h1, .inside-page h3{
            color: white;
        }
        .images img{
            width: 80% !important;
        }
        .date{
            margin-bottom: 20px
        }

        .inside-page h1{
            font-size: 55px;
        }

      .inside-page h3{
        font-size: 52px;
        text-transform: uppercase;
        color: #e8e9f0;
        font-weight: 400;
        border-top: 5px double #e5ff00;
        border-bottom: 5px double #e5ff00;
      }
      @media only screen and (max-width: 413px) {
            .inside-page h3{
                font-size:25px;
            }
            .inside-page h1{
                font-size:30px;
            }
        }
    </style>
</head>
<body>
    <div class="container text-center inside-page">

        @foreach($image as $images)

            <div class="date text-center"><h1>{{$images->date}}</h1></div>
            <div class="title"><h3>{{$images->title}}</h3></div>
            <div class="images ">
                <div class="row text-center">
                    <div class="col-md-12">
                        <?php foreach (json_decode($images->filename)as $picture) { ?>
                            <img src="{{ asset('/image/'.$picture) }}" style="height:auto; width:50%; margin: 5px; " class="img-fluid text-center" /><br>
                           <?php } ?>
                    </div>
                </div>
            </div>



        @endforeach


    </div>
</body>
</html>
