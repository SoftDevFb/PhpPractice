<!--Classic For Loop
* The for loop is used when you know in advance how many times the script should run.

Parameters:
init: Initialize the loop counter value
test: Evaluates each time the loop is iterated, continuing if evaluates to true, and ending if it evaluates to false
increment: Increases the loop counter value

* Each of the parameter expressions can be empty or contain multiple expressions that are separated with commas. 
In the for statement, the parameters are separated with semicolons.
-->

<?php
    //Displays numbers from 0 to 5
    for ($a = 0; $a < 6; $a++) {
        echo "Value of a : " . $a . "<br />";
    }
?>

<!--Foreach Loop
The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.
-->
<?php
    $names = array("John", "David", "Amy");
    foreach ($names as $name) {
        echo $name . '<br />';
    }

    //Outputs:
    //John
    //David
    //Amy
?>

<!--The Continue Statement
*When used within a looping structure, 
the continue statement allows for 
skipping over what remains of the 
current loop iteration. 

*It then continues the execution at the 
condition evaluation and moves on to the 
beginning of the next iteration.
-->

<?php
//Skips the even numbers in the for loop:
    for ($i = 0; $i < 10; $i++) {
        if ($i % 2 == 0) {
            continue;
        }
        echo $i . ' '; //Use a . to concatenate in PHP
    }

//Output: 1 3 5 7 9
?>

<!--Another Continue Statement Example-->
<?php
//Prints all numbers from 0 to 15 except 10 and 14
for ($i = 0; $i <= 15; $i++) {
    if ($i == 10 || $i == 14) {
    continue;
    }
    echo $i . "<br />";
    }
?>


