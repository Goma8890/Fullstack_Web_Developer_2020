<?php
//isset fucntion returns true or false everytime
$planet = "Earth";
$animal = null;

if (isset($planet)) {
    # code...
    echo '$planet is set!';
} else {
    echo '$planet is <u>not</u> set';
}
echo "<br>";

if (isset($animal)) {
    # code...
    echo '$animal is set!';
} else {
    echo '$animal is <u>not</u> set';
}
echo "<br>";

if (isset($color)) {
    # code...
    echo '$color is set!';
} else {
    echo '$color is <u>not</u> set';
}
echo "<br>";

//Using unset($var)
//$var is the variable you want to destroy
$juice = "Apple";
unset($juice);

if (isset($juice)) {
    # code...
    echo $juice . " is my favourite";
} else {
    echo "Variable was destroyed";
}
echo "<br>";

//Using defned(string $name) function.Will check if a constant exists.
//string $name is the constant you wnat to check
const __COLOR__ = "blue";
if (defined("__COLOR__")) {
    # code...
    echo "Color is set!";
}

if (defined("__NOT_SET__")) {
    # code...
    echo "Not set yet";
}
echo "<br>";

//Using function_exists(string $functionName)
//string $functionName is the name of the function to check
function test()
{
    //nothing in here, but is still exists
}

if (function_exists("test")) {
    # code...
    echo "test() exists! This returns true!";
}

if (function_exists("test2")) {
    # code...
    echo "test()2 does not exists! -> false!";
}
echo "<br>";

// Using Is not set
if (!isset($randomVariable)) {
    # code...
    echo '$randomVariable does <u>not</U> exist!';
}
