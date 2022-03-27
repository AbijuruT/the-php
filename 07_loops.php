<?php

// while
// while(true){

// }
// Loop with $counter
$counter = 0;
// while($counter < 10){
//     echo $counter.'<br>';
//     $counter++;
// }
// do - while
// do{
//     echo($counter);
//     $counter ++;
// }while($counter < 10);
// for
// for($i = 0; $i < 10; $++){
//     print($i);
// }
// foreach
// $names = ['thor', 'Goreth', 'Fillete', 'thorine'];
// foreach ($names as $person) {
//     print ($person) . '<br>';
// }
// With index
// foreach ($names as $idx => $person) {
//     print ($idx.$person) . '<br>';
// }
// Iterate Over associative array.
$person = [
    'name'=> 'Thor',
    'age'=>154,
    'hobbies'=>['Coding', 'singing', 'dancing'] 
];
foreach($person as $key => $value){
    if(is_array($value)){
        echo $key . ' ' . implode(',',$value) . '<br>';
    }else{
        echo $key . ' ' . $value . '<br>';
    }
}