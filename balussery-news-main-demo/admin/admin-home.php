
<?php
  include "config.php";
  session_start();

  if($_SESSION["is_login"]){
    //keep on page
    $username = $_SESSION['username'];
  }else{
    header("location: {$hostname}/admin/");
  }
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
 

 
  <!-- news section -->
  <br>
  <br>
  <div class="news-add-section">
    
     <div class="news-add-item">
       <br>
       <h5>Add a News</h5>
       <form>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select News category</label>
          <select class="form-control" id="exampleFormControlSelect1">
            <option>News</option>
            <option>Tourism</option>
            <option>Pravasi</option>
            <option>Entertainment</option>
            <option>Sponsered</option>
            <option>Literature</option>
            <option>Career</option>
            <option>Panagad</option>
            <option>Naduvannur</option>
            <option>Poonoor</option>
            <option>Kotoor</option>
            <option>Kayanna</option>
            <option>Koorachundu</option>
            <option>Balussery</option>
            <option>Thamarassery</option>
            <option>Unnikulam</option>
            <option>Ullyeri</option>
            <option>Atholi</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">News Title</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">News Content</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
        </div>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Video News</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Image News
        </div>
        </div>
        <div class="form-group">
          <div class="form-group">
            <label for="exampleFormControlFile1">Select image</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" accept=".png,.jpg,.jpeg">
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Yotube Link</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Show in Trending</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Show in featured</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
     </div>
  </div>  
  <br>
  <br>
 <!-- trending now section -->
 <div class="news-add-section">
    
  <div class="news-add-item">
    <br>
    <h5>Add Trending News</h5> 
    <form action="add-trendnews.php" method="post">
     
     <div class="form-group">
       <label for="exampleInputEmail1">New Trending News</label>
       <input type="text" name="content" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
     </div>
     <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
   </form>
  </div>
</div>  
<br>
<br>
<!-- covid updates  -->
<div class="news-add-section">
    
  <div class="news-add-item">
    <br>
    <h5>Add a Covid Update</h5> 
    <form>
     
     <div class="form-group">
       <label for="exampleInputEmail1">New Covid Update</label>
       <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
  </div>
</div> 
<br>
<hr>
<br>
<h5 style="text-align: center;">News </h5> 
<br>
<div class="show-news-section">
<div class="show-news-item">
    <br> 
    <br>
    <form>
      <h5>16/04/2020</h5>
       <h5>വൈദ്യുതിയും ഇന്റർനെറ്റും ഇല്ല; സഞ്ചാരികളെ ആകർഷിക്കുന്ന ലോകത്തിലെ ഏകാന്ത വീട്</h5>
       <br>
       <div class="text-align-center">
         <img src="assets/img/images/news-images/small-carousel/owl2.jpg" alt="image" width="50%" >
       </div>
       
       <p>ഐസ്‌ലാന്‍ഡിൽ തെക്കുഭാഗത്തായി വെസ്റ്റ്‌മാന്‍ ദ്വീപ്സമൂഹത്തില്‍ സ്ഥിതിചെയ്യുന്ന ഒരു കൊച്ചു ദ്വീപാണ് എല.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
        ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.

       </p>
       <div class="form-group">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" checked disabled value="option1">
          <label class="form-check-label" for="inlineCheckbox1" >Show in Trending</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" disabled value="option2">
          <label class="form-check-label" for="inlineCheckbox2">Show in featured</label>
        </div>
      </div>
    </form>
    <div class="items-row">
      <button type="button" class="btn btn-warning mr-5">Edit</button>
      <button type="button" class="btn btn-danger ">Delete</button>      
    </div>
  
</div>
</div>
<div class="show-news-section">
  <div class="show-news-item">
      <br> 
      <br>
      <form>
        <h5>16/04/2020</h5>
         <h5>വൈദ്യുതിയും ഇന്റർനെറ്റും ഇല്ല; സഞ്ചാരികളെ ആകർഷിക്കുന്ന ലോകത്തിലെ ഏകാന്ത വീട്</h5>
         <br>
         <div class="text-align-center">
           <img src="assets/img/images/news-images/small-carousel/owl2.jpg" alt="image" width="50%" >
         </div>
         
         <p>ഐസ്‌ലാന്‍ഡിൽ തെക്കുഭാഗത്തായി വെസ്റ്റ്‌മാന്‍ ദ്വീപ്സമൂഹത്തില്‍ സ്ഥിതിചെയ്യുന്ന ഒരു കൊച്ചു ദ്വീപാണ് എല.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
          ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ.
  
         </p>യ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശതകോടീശ്വരൻ താമ. ഐസ്‌ലാൻഡിലെ പ്രശസ്ത ഗായികയായ ജോർക്കുമായി ബന്ധപ്പെട്ടതാണ് മറ്റൊരു കഥ. ഈ വീട്ടില്‍ ഒരു ശ
         <div clas s="form-group">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" checked disabled value="option1">
            <label class="form-check-label" for="inlineCheckbox1" >Show in Trending</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" disabled value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Show in featured</label>
          </div>
        </div>
      </form>
      <div class="items-row">
        <button type="button" class="btn btn-warning mr-5">Edit</button>
        <button type="button" class="btn btn-danger ">Delete</button>      
      </div>
    
  </div>
  </div>












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