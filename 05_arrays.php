<?php

// // Create array
// $fruits = ["banana", "apple", "orange"];
// // Print the whole array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // Get element by index
// echo $fruits[1] . '<br>';
// // Set element by index
// $fruits[0] = 'Lemon';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // Check if array has element at index 2

// isset($fruits[2]); //true

// // Append element
// $fruits[] = 'pinepal';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // Print the length of the array
// echo count($fruits) . '<br>'; //return the number of element in array

// // Add element at the end of the array
// array_push($fruits, 'strawberry');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // Remove element from the end of the array
// array_pop($fruits); //removes the last element and return that value
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// // Add element at the beginning of the array
// array_unshift($fruits, 'Bingo'); //adds the element at the begging of array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Remove element from the beginning of the array
// echo array_shift($fruits);
// // Split the string into an array
// $string = "home, kids, parents";
// echo '<pre>';
// var_dump(explode(',', $string));
// echo '</pre>';
// // Combine array elements into string
// echo implode('&', $fruits);
// // Check if element exist in the array
// echo '<pre>';
// var_dump(in_array('bingo', $fruits));
// echo '</pre>';
// // Search element index in the array
// echo '<pre>';
// var_dump(array_search('apple', $fruits));
// echo '</pre>';
// // Merge two arrays
// $vegetables = ['Potato', 'tomato'];
// echo '<pre>';
// var_dump(array_merge($vegetables, $fruits));
// echo '</pre>';

// echo '<pre>';
// var_dump(array_merge($vegetables, $fruits));
// var_dump([...$fruits, ...$vegetables]); # spread operator or new notation
// echo '</pre>';

// // Sorting of array (Reverse order also)
// echo "Sorting element";
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// rsort($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
// $person = [
//     'name'=> 'Thor',
//     'age'=>154,
//     'hobbies'=>['Coding', 'singing', 'dancing'] 
// ];
// echo '<pre>';
// var_dump($person);
// echo '</pre>';
// // Get element by key
// echo $person['name'].'<br>';
// // Set element by key
// $person['power'] = 'flying';
// echo '<pre>';
// var_dump($person);
// echo '</pre>';
// // Null coalescing assignment operator. Since PHP 7.4
// // if(!isset($person['address'])){
// //     $person['address'] = 'unknown';
// // }

// // Short hand
// $person['address'] ??= 'unknown';
// echo '<pre>';
// var_dump($person);
// echo '</pre>';
// Check if array has specific key
// We use isset function to check the key

// Print the keys of the array
// echo '<pre>';
// var_dump(array_keys($person));
// echo '</pre>';
// // Print the values of the array
// echo '<pre>';
// var_dump(array_values($person));
// echo '</pre>';
// // Sorting associative arrays by values, by keys
// echo'Sort by key'.'<br>';
// ksort($person);
// echo '<pre>';
// var_dump($person);
// echo '</pre>';

// echo 'Sort by values' . '<br>';
// asort($person);
// echo '<pre>';
// var_dump($person);
// echo '</pre>';

// Two dimensional arrays

$todos = [
    ['title'=> 'To do title 1', 'completed' => true],
    ['title' => 'To do title 2', 'completed' => true],
    ['title' => 'To do title 3', 'completed' => false],
    ['title' => 'To do title 4', 'completed' => true],
    ['title' => 'To do title 5', 'completed' => false]
];
echo '<pre>';
var_dump($todos);
echo '</pre>';