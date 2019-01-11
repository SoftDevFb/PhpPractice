<!--This file sets up our connection to our database-->
<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "login_system";
$conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
?>