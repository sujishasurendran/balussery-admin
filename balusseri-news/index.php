<?php
$conn = new mysqli("localhost","root","","balu");
$msg = '';

if(isset($_POST['upload'])){
    $image = $_FILES['image']['name'];
    $path = 'upload/'.$image;
    $sql = $conn->query("INSERT INTO slide (image_path) VALUES ('$path')");
    if($sql){
        move_uploaded_file($_FILES['image']['tmp_name'],$path);
        $msg = 'image uploaded seccessfully';
    }
    else{
        $msg = 'failed to upload';
    }
}

$result = $conn->query("SELECT image_path from slide ORDER BY id DESC LIMIT 3");
?>
<!DOCTYPE html>
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

  <!-- =======================================================
  * Template Name: BizLand - v1.2.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="top-tag-line" class="d-none d-lg-flex align-items-center ">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
         <span class="text-violet tag-line-font-size tag-line-spacing">ബാലുശ്ശേരി <span class="text-dark-red">വാർത്തകൾ</span></span>
         <span class="text-violet tag-line-font-size">BALUSERRI <span class="text-dark-red">NEWS</span></span>
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
           
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#services">Services</a></li>
            
            <li><a href="#team">Team</a></li>
            <li class="drop-down"><a href="">Drop Down</a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="drop-down"><a href="#">Deep Drop Down</a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
            <br>
          </ul>
        </nav><!-- .nav-menu -->
       
      </div>
    </div>
    <!-- covid updates -->
    <div class="items-row bg-red-light ">
        <div class=" covid-tittle " >
           <p>COVID-UPDATES</p>
        </div>
        <div>
          <marquee class="covid-content" style=""  behavior="scroll" direction="left" scrollamount="3" >
            <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>     
         </marquee>
        </div>
    </div>
   <!-- latest news  -->
    <div class="items-row bg-dark-yellow ">
      <div class="trending-now-title " >
        <p>TRENDING NOW</p>
      </div>
      <div>
        <marquee class="trending-now-content" style=""  behavior="scroll" direction="left" scrollamount="2" >
          <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>     
      </marquee>
      </div>
    </div>

  </header><!-- End Header -->
  <!-- add banner first -->
  <div class="first-add-banner">
    <div id="demo" class="carousel slide" data-ride="carousel"> 
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/images/adds-images/image.png" alt="Los Angeles" width="100%" height="60">  
        </div>
        <div class="carousel-item">
          <img src="assets/img/images/adds-images/image2.jpg" alt="Chicago" width="100%" height="60">    
        </div>
        <div class="carousel-item">
          <img src="assets/img/images/adds-images/image.png" alt="New York" width="100%" height="60"> 
        </div>
      </div>
    
    </div>
     
  </div>

  <!-- carousel main -->
  <div style="margin-top:2px;">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
      <?php
  $i = 0;
  foreach ($result as $row){
      $actives = '';
      if($i == 0){
          $actives = 'active';
      }
  
  ?>
       <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
  <?php $i++; } ?>
</ul>
      <div class="carousel-inner">
      <?php
  $i = 0;
  foreach ($result as $row){
      $actives = '';
      if($i == 0){
          $actives = 'active';
      }
  
  ?>
  <div class="carousel-item <?= $actives; ?>">
    <img src="<?= $row['image_path'] ?>" width="100%" height="400">
  </div>
  <?php $i++; } ?>
      </div>
     
    </div>
    
  </div>
   <!-- add banner second -->
  <div class="first-add-banner">
    <div id="demo" class="carousel slide" data-ride="carousel"> 
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/images/adds-images/image.png" alt="Los Angeles" width="100%" height="60">
        </div>
        <div class="carousel-item">
          <img src="assets/img/images/adds-images/image2.jpg" alt="Chicago" width="100%" height="60"> 
        </div>
        <div class="carousel-item">
          <img src="assets/img/images/adds-images/image.png" alt="New York" width="100%" height="60">       
        </div>
      </div>
    
    </div>
  </div>
    
   <!-- carousel sub -->
  
 


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