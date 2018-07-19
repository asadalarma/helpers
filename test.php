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



echo $general->arrayunshift($array);