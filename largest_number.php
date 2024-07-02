<?php

/*-------
Find the largest number using PHP (30)
Write a PHP script to find the largest number among three given numbers: $num1 = 4, $num2 = 5, and $num3 = 6. Use if-else statements.
*/

$num1 = 4;
$num2 = 5;
$num3 = 6;

if ($num1 >= $num2 && $num1 >= $num3) {
    printf(" <h1> Between %d, %d And %d <br> The Largest Number Is %d </h1> ", $num1, $num2, $num3, $num1);
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    printf(" <h1> Between %d, %d And %d <br> The Largest Number Is %d </h1> ", $num1, $num2, $num3, $num2);
} else {
    printf(" <h1> Between %d, %d And %d <br> The Largest Number Is %d </h1> ", $num1, $num2, $num3, $num3);
}

?>
