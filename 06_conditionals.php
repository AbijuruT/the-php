<?php

$age = 20;
$salary = 300000;

// Sample if
// if($age === 20){
//     print('Am with {}').'<br>';
// }
// // Without circle braces
// if($age === 20) print('Am without {}');
// // Sample if-else
// if($age > 20){
//     print(1);
// }else{
//     print(2) . '<br>';
// }
// Difference between == and ===
$age == 20; //true
$age == '20'; //true
$age === 20; //true
$age === '20'; //false
// if AND
if ($age > 20 || $salary === 300000) {
    print ('Do something') . '<br>';
}
// if OR

// Ternary if
// print($age < 22 ? 'young' : 'old');
// Short ternary
// $my_age = $age ?: 18;

// var_dump($my_age);
// Null coalescing operator
// $nick_name = isset($name) ? $name : 'Thor';
// $nick_name = $name ?? 'Thor';

// echo $nick_name;
// switch
$user_role = 'admin'; //admin, user, editor
switch($user_role){
    case 'admin':
        print('admin');
        break;
    case 'editor':
        print('Editor');
        break;
    case 'user':
        print('user');
        break;
    default:
    print('None');
}