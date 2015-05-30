<?php

$host="localhost"; // Host name
$username=""; // Mysql username
$password=""; // Mysql password
$db_name="people"; // Database name
//$tbl_name="members"; // Table name

// Connect to server and select databse.
 $con = mysql_connect("localhost","root" ,"");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$email=$_POST['email'];
$password=$_POST['pass'];

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$password = stripslashes($password);
$email = mysql_real_escape_string($email);
$password= mysql_real_escape_string($password);

$sql="SELECT * FROM info WHERE email='$email' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['email']=$email;
$_SESSION['password']=$password;
header("location:sucess.php");
}
else {
//echo "Wrong Username or Password";
	header("location:failure.php");
}
?>