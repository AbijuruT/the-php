<?php

// Declaring numbers
$a = 5;
$b = 6;
$c = 1.5;
// Arithmetic operations
echo ($a + $b + $c);
// Assignment with math operators

// Increment operator

// Decrement operator

// Number checking functions
is_float(3.25); //true
is_int(4); //true
is_numeric("354"); //true
// Conversion
$str_numb = '4578.4';
$number = (float)$str_numb;
var_dump($number);
// Number functions
echo ("Abs(-15)") . abs(-15) . "<br>";
echo ("pow(2,3)") . pow(2, 3) . "<br>";
echo ("sqrt(16)") . sqrt(16) . "<br>";
echo ("max(2,3)") . max(2, 3) . "<br>";
echo ("min(2,3)") . min(2, 3) . "<br>";
echo ("round(2.4)") . round(2.4) . "<br>";
echo ("round(2.6)") . round(2.6) . "<br>";
echo ("floor(2.4)") . floor(2.4) . "<br>";
echo ("ceil(2.4)") . ceil(2.4) . "<br>";

// Formatting numbers
$number = 123456789.12345;
echo(number_format($number,2, '.', ' '));

// https://www.php.net/manual/en/ref.math.php
