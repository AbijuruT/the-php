<?php

// What is a variable

// Variable types
/**
 * string
 * integers
 * floats
 * boolean
 * null
 * array
 * object
 * resource 
 */
// Declare variables
$name = 'Thor';
$age = 1400;
$isHuman = false;
$height = 2.5;
$power = null;

// Print the variables. Explain what is concatenation
echo ($name) . "<br>";
echo ($age) . "<br>";

// Print types of the variables

echo (gettype($name)) . "<br>";

// Print the whole variable

var_dump($name) . "<br>";
// Change the value of the variable
$age = "525";
// Variable checking functions
is_string($name) . "<br>";

// Check if variable is defined
isset($name); //true
isset($any_var); //false coz it is not declared
// Constants
define('PI', 3.14) . "<br>";

// Using PHP built-in constants
echo (SORT_ASC) . "<br>";
echo (PHP_INT_MAX);
