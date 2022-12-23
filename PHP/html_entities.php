<?php
echo "You can change the <font> of any HTML element";
//Server priority loading list
//1. PHP
//2. HTML
//3. Javascript
echo "<br>";

//htmlentities($str);
//$str is the string or variable to turn into HTML entities
$element = htmlentities("<font>");
echo "Element is &rarr; " . $element;

echo "<br>";
//Homework
$entities = htmlentities("!@#$%^&*()_+-=;<>,./\[]{}");
echo $entities;

echo "<br>";
$sentence = htmlentities("<font>, <h1>, <div> and <b>");
echo "I use " . $sentence . " tags";
