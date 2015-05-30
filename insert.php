<?php
$con=mysqli_connect("localhost","root","","comic");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO contact (Name, Email, Num, Comment)
VALUES
('$_POST[Name]','$_POST[Email]','$_POST[Num]','$_POST[Comment]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
 header("Location:index.php");

mysqli_close($con);
?>