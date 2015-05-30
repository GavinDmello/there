<html>
<head>


</head>

<body>

<?php
$database="people"; //database name
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
    $con = mysql_connect("localhost","root" ,"");//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("$database", $con);

$query = "INSERT INTO info (first,last,email,password)VALUES ('$fname','$lname','$email','$pass')";
mysql_query($query);


header("Location:index.php");



mysql_close();
?> 
</body>


</html>
