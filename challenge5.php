<?php
echo "The task 01" . "</br>";
function greetUser($name){
    echo "Hello" . "\n" . $name . "</br>";
}

// call the greetUser function
greetUser("Abdellatif");

echo "The task 02" . "</br>";

function calculateArea($width, $height){
    return $width * $height;
}

$totalArea = calculateArea(10, 5);

echo "The total area is" . "\n" . $totalArea . "\n" . "square units." . "</br>";


echo "The task 03" . "</br>";

function isAdult($age){
    if($age >= 18) {
        return true;
    } else {
        return false;
    }
}

if(isAdult(18)) {
    echo "You are valid". "</br>";
} else {
    echo "You are not valide". "</br>";
}

echo "The task 04" . "</br>";

function multiplyNumbers($a, $b){
    if(is_numeric($a) && is_numeric($b)){
        return $a * $b;
    } else {
        echo "Error: Invalid Input." . "</br>";
    }
}

$result1 = multiplyNumbers(5, 10);
$result2 = multiplyNumbers(5, "apple");

echo $result1 . "</br>";
echo $result2;


echo "The task 05" . "</br>";
function manualReverse($text){
    $reversed = "";
    for ($i = strlen($text) - 1; $i >= 0; $i--) {
        $reversed .= $text[$i] . "</br>";
    }

    echo "the length is: " . $reversed . "\n";
}

manualReverse("abdellatif");








?>