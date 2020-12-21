<?php
$hostname = "http://localhost/balussery-news-main";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "balussery_news";
$con = mysqli_connect($servername,$username,$password,$dbname);
if($con->connect_error)
{
    die("connection failed: " . $con->connect_error);
}
?>
