<?php

$db = mysqli_connect("localhost","root","","test");

$id = $_GET['id']; // get id through query string

$del = mysqli_query($db,"delete from vacancy where id = '$id'"); // delete query

if($del)
{
    mysqli_close($db); // Close connection
    header("location:welcome.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}

?>