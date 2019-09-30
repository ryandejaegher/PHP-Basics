<?php
$name = 'Alena';
$string_one = "Hello $name";
echo $string_one;
 $string_one = 'Learning to display "Hello Alena!" to the screen.';
//$string_one = '';
//($string_one == 'Learning to display "Hello Alena!" to the screen');
var_dump($string_one == 'Learning to display "Hello Alena!" to the screen.');

if ($string_one == 'Learning to display "Hello Alena!" to the screen.') {
    echo 'the values match';
} elseif ($string_one == '') {
    echo 'the string is empty';
} else {
    echo 'the values do not match';
}
?>