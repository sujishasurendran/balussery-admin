
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="author" content="sahil">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<title>carousal</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
<body>
    <div class="row justify-content-center">
          <div class="col-lg-4 bg-dark rounded px-4">
              <h4 class="text-center text-light p-1">select image to upload</h4>
            <form action="index.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
                  <input type="file" name="image" class="form-contol p-1" required>
              </div>
              <div class="form-group">
                  <input type="submit" name="upload" class="btn-btn-warning btn-block" value="upload image">
              </div>
              <div class="form-group">
                  <h5 class="text-center text-light"></h5>
              </div>
           </form>
          </div>
     </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>