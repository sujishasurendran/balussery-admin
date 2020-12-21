<?php
session_start();
if(!isset($_SESSION["sess_user"])){
header("Location: login.php");
}
else
{
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome admin</title>
</head>
<h1>Welcome Admin</h1>
<div class="login">
<h1 align="center">Add your new vacancy here</h1>
<form action="" method="post" style="text-align:center;">
<input type="text"  id="job" name="job"  style="height:20px; width:300px;"><br/><br/>

<input type="submit" value="ADD" name="submit"></form>
<?php
$db = mysqli_connect("localhost","root","","test");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{		
    $job = $_POST['job'];
    
    $insert = mysqli_query($db,"INSERT INTO `vacancy`( `job`) VALUES ('$job')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        echo "New vacancy added successfully.";
    }
}

?>





<br></br>
<?=$_SESSION['sess_user'];?>!<a href="logout.php">Logout</a>
<body>
//
<div align="center">
<h2>vacancy Details</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>vacancy</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>

<?php
$db = mysqli_connect("localhost","root","","test");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
// Using database connection file here

$records = mysqli_query($db,"select * from vacancy"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['job']; ?></td>
    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
  </tr>	
<?php
}

?>
</table></div>

</body>
</html>
<?php
}
?>