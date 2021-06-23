<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <title>Kananiyam</title>
</head>
<body>
    <div class="container">
        @foreach ($kananiyam as $kananiyam)
        <ul>
            <li>{{$kananiyam->filename}}</li>
        </ul>
        @endforeach
    </div>

</body>
</html>
