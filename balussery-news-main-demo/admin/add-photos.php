<?php
  include "config.php";
  session_start();

  if($_SESSION["is_login"]){
    //keep on page
    $username = $_SESSION['username'];
  }else{
    header("location: {$hostname}/admin/");
  }
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ബാലുശ്ശേരി വാർത്തകൾ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

   <!-- ======= Top Bar ======= -->
   <div id="top-tag-line" class="d-none d-lg-flex align-items-center ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
         <span class="text-violet tag-line-font-size tag-line-spacing">ബാലുശ്ശേരി <span class="text-dark-red">വാർത്തകൾ</span></span>
         <span class="text-violet tag-line-font-size">BALUSERRY <span class="text-dark-red">NEWS</span></span>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="" class="bg-red">

    <div id="headers">
      <div class=" d-flex align-items-center">

        
            <a href="index.html" class="" style="background-color: aliceblue;border-radius:50%;padding:3px;">
              <img src="assets/img/images/static-images/main-logo.png" alt="" width="100" height="100">
            </a>
           <div class="time items-row" >
              <p class="day" >03</p>
              <div class="">
                  <p>Sunday</p>
                  <p>December</p>
                  <p>2020</p>
              </div>
            </div> 
  
      <nav class="nav-menu d-none d-lg-block">
          <ul>
          <li><a href="add-photos.php">Add Photos</a></li>
           
           <li>Welcome <?php echo $_SESSION["username"]; ?><a href="logout.php">Logout</a></li>
            
            <br>
          </ul>
        </nav> 
        <!-- .nav-menu -->

       
      </div>
    </div>




  </header>

  <!-- End Header -->
  <br><br><br>
  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Photos</h1>
             </div><br><br><br><br>
             <form  action="save-photos.php" method="POST" enctype="multipart/form-data">
             <div class="form-group">
                          <label for="exampleInputPassword1">add image</label>
                          <input type="file" name="fileToUpload" required >
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Save" >
                      
                    </form>
         </div>
      </div>
</div><br><br><br><br><br><br><br><br><br>
<!-- footer  -->

<div class="footer">
  <div class="row">
    <div class="col-sm-4 col-md-4 col-lg-4 center-text" >
      <img src="assets/img/images/static-images/main-logo.png" alt="logo" width="100px" height="100px">
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 center-text" >
        <h6>follow us</h6>
        <div class="social-links">
          <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
          <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
          <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
          <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
         <p>BALUSSERY NEWS | ALL RIGHTS RESERVED</p>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4 center-text" >
      
    </div>
</div>
  
</div>


<!-- end of componets -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File --> 
  <script src="assets/js/main.js"></script>

</body>

</html>