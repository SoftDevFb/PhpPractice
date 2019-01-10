<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arrays</title>
</head>
<body>

    
    <?php
    //Two-dimensional array containing 3 arrays:
    $people = array(
        'online'=>array('David', 'Amy'),
        'offline'=>array('John', 'Jason', 'Jeb'),
        'away'=>array('Arthur', 'Daniel')
    );

    //Accessing elements of the array
    echo $people['online'][1]; //Outputs Amy
    echo $people['offline'][0]; //Outputs John
    ?>

    

</body>
</html>