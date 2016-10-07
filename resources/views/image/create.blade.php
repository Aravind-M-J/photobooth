<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Image Upload</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="dist/css/main.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">                
				<form action="{{route('image.store')}}" enctype="multipart/form-data" class="dropzone" id="book-image">
					{{csrf_field()}}
				 <div>
                    <h3>Upload Images</h3>
                </div>
				</form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    <script src="dist/js/imageupload.js"></script>
</body>
</html>