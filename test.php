<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("generalclass.php");

$general=new GeneralClass();

$myvar = array(
    'hello',
    42,
    array(1,'two'),
    'apple'
);

$value 	= [90, 70, 85, 65, 80];
$title 		= ['Title 1', 'Title 2', 'Title 3'];
$vehicle 	= ['Car', 'Motorcycle', 'Bicycle'];
$array = [
    'Apple Pies',
    'Apples',
    'Blueberries',
    'Pumpkins',
    'Corn',
    'Watermelons',
];

$array = [
    'Apples',
    'Blueberries',
    'Pumpkins',
    'Corn',
    'Watermelons',
];



//echo $general->arrayunshift($array);

function reverse($str)
{
    if (strlen($str) < 2) {
        return $str;
    }

    return reverse(substr($str, 1)) . $str[0];
}


function reverseStringRecursive($string)
{
    // Recursion Termination Condition or Base Case
    if (strlen($string) < 2) {
        return $string;
    }

    // Recursive Call
    return reverseStringRecursive(substr($string, 1)) . $string[0];
}

function reverseStringDivideAndConquer($string)
{
    // Base case
    if (strlen($string) < 2) {
        return $string;
    }

    $mid   = (int) strlen($string) / 2;
    $left  = substr($string, 0, $mid);
    $right = substr($string, $mid);

    // Flip the substring
    return reverseStringDivideAndConquer($right) . reverseStringDivideAndConquer($left);
}

echo reverseStringDivideAndConquer("abc");