<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.min.css">
	<link rel = "stylesheet" type = "text/css" href = "css/footer.css">

    <!-- Title Page-->
    <title>KananiyamForm</title>

 <!-----link google font for body----->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- Main CSS-->
    <link href="css/articleFormStyle.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper-top bg-dark p-t-100 p-b-50">
        <div class="wrapper-top wrapper--w900-top">
            <div class="card-top card-6-top">
                <div class="card-heading-top">
                    <h2 class="title">Upload Article for Kananiyam</h2>
                </div>
                <div class="card-body-top">

                    <form method="POST" action="add_article">
                        {{csrf_field()}}
                        <div class="form-row-top">
                            <div class="name">Registration_No</div>
                            <div class="value">
                                <input class="input--style-6 @error('RegistrationNo') is-invalid @enderror" type="text" name="RegistrationNo">
                                     @error('RegistrationNo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-row-top">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6 @error('Name') is-invalid @enderror" type="text" name="Name">
                                        @error('Name')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                        </div>
                         <div class="form-row-top">
                            <div class="name">Article Title</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6 @error('Title') is-invalid @enderror" type="text" name="Title">
                                        @error('Title')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                        </div>
						<div class="form-row-top">
                            <div class="name">Description</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6 @error('description') is-invalid @enderror" name="description" placeholder="I this article, ........."></textarea>
                                         @error('description')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row-top">
                            <div class="name">Upload Article</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file @error('Article') is-invalid @enderror" type="file" name="Article" id="file">
                                        @error('Article')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload your article. Max file size 50 MB</div>
                            </div>
                        </div>
                        <div class="card-footer-top">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Upload</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="js/jque.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
