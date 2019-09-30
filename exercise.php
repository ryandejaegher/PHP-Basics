<?php 
// store each exercise in a string variable
$exercise1 = 'Display "Hello World"';
$exercise2 = 'Run!!!!';
$exercise3 = 'Lift Heavy';
// create a variable containing the day of the week
$day = date('N');
// use an if statement to test for the day of the week
if ($day === "1") {
    echo $exercise1;
} elseif ($day === "2") {
    echo $exercise2;
} elseif ($day === "3") {
    echo $exercise3;
}
// display the corresponding exercise tag

?>