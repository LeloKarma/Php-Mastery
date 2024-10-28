<?php

$a = 1;
$b = 2;
$c = $a + $b;
echo $c;

$number = 123;
var_dump($number); //to see what a variable's content results here int(123)

$number = 'abc';
var_dump($number); //string(3) "abc" //type juggling

$a = 2;
$b = 4;
$c = $a + $b; // addition results 6
$d = $a . $b; //concatenates results 24

/* Arithmetic operators */
var_dump($a - $b); //-2
var_dump($a / $b); //0.5
var_dump($a * $b); //8
var_dump(-$a); //-2
var_dump($a ** $b); //16

/* Assignment operators */
$a = 3 + 4 + 5 - 2;
var_dump($a); //10

$a = 13;
$a += 14; // same as $a = $a + 14;
$a -= 2; // same as $a = $a - 2;
$a *= 4; //same as $a = $a * 4;
var_dump($a);

/* Comparison Operators */
var_dump(2 < 3); //true
var_dump(3 < 3); //false
var_dump(3 <= 3); //true
var_dump(4 <= 3); //false
var_dump(1 <=> 2); //int less than 0
var_dump(1 <=> 1); // 0
var_dump(3 <=> 2); //int greater than 0

$a = 3;
$b = '3';
$c = 5;
var_dump($a == $b); //true //type juggling
var_dump($a === $b); //false //identical operator
var_dump($a != $b); //false
var_dump($a !== $b); //true
var_dump($a <> $c); //true
echo '<br>';
echo '<br>';

/*
*strings
*/

$text = ' How can a calm cram in a clean cream can?';
echo strlen($text); //to get the number of chars in a string 42
echo '<br>';

$text = trim($text); //removes all blank spaces in a string
echo $text;
echo '<br>';

echo strtoupper($text); //sends all chars to uppercases
echo '<br>';

echo strtolower($text); //sends all chars to lowercases
echo '<br>';

echo str_replace('can', 'could', $text); //replace all occurrence of 1st string with the second
echo $text;
echo '<br>';

echo substr($text, 2, 6); // w coul extracts all chars in the given position

var_dump(strpos($text, 'can')); // false if string couldnt be found
var_dump(strpos($text, 'could')); // 4 shows the position of the 1st occurence of the given string
echo '<br>';
echo '<br>';

$firstname = 'Lelo';
$surname = 'Karma';

echo 'I am '. $firstname . ' ' . $surname . '!.';

/*
*Arrays
*/

$names = ['Harry', 'Ron', 'Hermione'];
$status = [
    'name' => 'James Potter',
    'status' => 'dead',
];
//to add values to an array
$names[] = 'Neville';
$status['message'] = 'test';
print_r($names);
echo '<br>';
print_r($status);

//to remove a value in an array we use unset
unset($status['status']);
print_r($status);
echo '<br>';

$names['badguy'] = 'Voldemort';
$names[8] = 'Snape';
$names[] = 'McGonagall';
print_r($names);
//res: Array ( [0] => Harry [1] => Ron [2] => Hermione [3] => Neville [badguy] => Voldemort [8] => Snape [9] => McGonagall ) 

//CHECKING IF AN ARRAY IS EMPTY OR NOT using isset() and empty()
$string = '';
$array = [];
$names = ['Lelo', 'Karma', 'Bull'];
var_dump(empty($string)); //true
var_dump(empty($array)); //true
var_dump(empty($names)); //false
var_dump(isset($array)); //false
var_dump(isset($names[2])); //true
echo '<br>';
echo '<br>';

//using in_array() and array_search()
$containsLelo = in_array('Lelo', $names);
var_dump($containsLelo);

$whereLelo = array_search('Bull', $names);
var_dump($whereLelo);

//array funcs sort(), asort(), ksort() check docs for more
echo '<br>';

//array_keys, array_values

$properties = [
    'firstname' => 'Tom',
    'surname' => 'Riddle',
    'house' => 'Slytherin'
];
$keys = array_keys($properties);
var_dump($keys);
echo '<br>';
$values = array_values($properties);
var_dump($values);
echo '<br>';
echo '<br>';

$all = array_merge($names, $properties);
var_dump($all);
?>