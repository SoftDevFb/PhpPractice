<?php
    include_once 'includes/dbh-inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Databases</title>
</head>
<body>

<?php
    $sql = "SELECT * FROM users WHERE user_first = 'Daniel';"; //SQL query to be sent to the db    
    $result = mysqli_query($conn, $sql);       //Queries db using $sql code
    $resultCheck = mysqli_num_rows($result);   //Checks if data was received from query ($results)

    //If results received If Statement
    if ($resultCheck > 0) {
        //Runs while condition (resultscheck) is true, so while data is being received from db
        while($row = mysqli_fetch_assoc($result)) { //Turns results from db into an array for display
            echo $row['user_uid'] . "<br>"; //Displays associated data form db
        }    
    }

?>

</body>
</html>