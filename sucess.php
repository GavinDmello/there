// Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
<?php
session_start();
if(!isset( $_SESSION['user'])){
header("location:Home.php");
}
?>

<html>
<body>
Login Successful
</body>
</html>