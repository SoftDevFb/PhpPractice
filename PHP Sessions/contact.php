<!--Starting a PHP Session-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body> 

<ul>
    <li><a href="index.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>

<?php
echo $_SESSION['username'];
?>
</body>
</html>