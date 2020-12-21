<?php
  $connect = mysqli_connect("localhost", "root", "", "testing");
  if(isset($_FILES['fileToUpload'])){
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = end(explode('.',$file_name));

    $extensions = array("jpeg","jpg","png");

    if(in_array($file_ext,$extensions) === false)
    {
      $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
    }

    if($file_size > 2097152){
      $errors[] = "File size must be 2mb or lower.";
    }
    $new_name = time(). "-".basename($file_name);
    $target = "banner/".$new_name;

    if(empty($errors) == true){
      move_uploaded_file($file_tmp,$target);
    }else{
      print_r($errors);
      die();
    }
}
  
  $title = mysqli_real_escape_string($connect, $_POST['post_title']);
  $sql = "INSERT INTO banner(banner_title,banner_image)
          VALUES('{$title}','{$new_name}');";
if(mysqli_multi_query($connect, $sql)){
      header("location:index.php");
          }else{
            echo "<div class='alert alert-danger'>Query Failed.</div>";
          }
        
        ?>