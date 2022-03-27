<?php

// Function which prints "Hello I am THor"
// function hello(){
//     echo ('Hello I am THor');
// }
// hello();
// Function with argument
// function hello($name)
// {
//     return "Hello I am $name";
// }
// $function_value = hello('Thor');
// echo $function_value;
// Create sum of two numbers
// function sum($num1, $num2){
//     return $num1 + $num2;
// }
// echo sum(8,5);

// Create function to sum all numbers using ...$nums
// function sum_numbers(...$nums){
//     $sum = 0;
//     foreach($nums as $num){
//         $sum+= $num;
//     }
//     return $sum;
   

// }
// echo sum_numbers(1,2,3,4);


// Arrow functions

function sum_numbers(...$nums)
{
    return array_reduce($nums, fn($element, $num)=> $element + $num);
}
echo sum_numbers(1, 2, 3, 4);
