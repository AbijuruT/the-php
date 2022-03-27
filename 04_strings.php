<?php

// Create simple string
$name = 'Thor';
$string = 'Hello Thor';
$string2 = 'Hello ' . $name;

echo ($string) . '<br>';
echo ($string2) . '<br>';
// String concatenation
echo ('Hello' . ' from PHP') . '<br>';
// String functions
echo "1 - " . strlen($string) . '<br>';
echo "2 - " . trim($string) . '<br>'; //removes spaces
echo "3 - " . ltrim($string) . '<br>';
echo "4 - " . rtrim($string) . '<br>';
echo "5 - " . str_word_count($string) . '<br>';
echo "6 - " . strrev($string) . '<br>';
echo "7 - " . strtoupper($string) . '<br>';
echo "8 - " . strtolower($string) . '<br>';
echo "9 - " . ucfirst($name) . '<br>';
echo "10 - " . lcfirst($name) . '<br>';
echo "11 - " . ucwords('Hi world') . '<br>';
echo "12 - " . strpos($string, 'world') . '<br>';
echo "13 - " . stripos($string, 'world') . '<br>';
echo "14 - " . substr($string, 8) . '<br>';
echo "15 - " . str_replace('WORLD', 'PHP', $string) . '<br>';
echo "16 - " . str_ireplace('World', 'PHP', $string) . '<br>';



// Multiline text and line breaks
$long_text = "
    Hello, my name is Goreth
    I am 23,
    I love Thor.
";
echo($long_text).'<br>';
echo nl2br($long_text); //this adds a new line whenever there is a new line
// Multiline text and reserve html tags
$long_text = "
    Hello, my name is <b>Goreth</b>
    I am <b>23</b>,
    I love <b>Thor</b>.
";
echo nl2br(htmlentities($long_text));


// https://www.php.net/manual/en/ref.strings.php