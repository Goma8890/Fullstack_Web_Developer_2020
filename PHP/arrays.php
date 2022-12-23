<?php
//We have 3 types of arras in PHP:
//1. Numeric
//2. Associative
//3. Multidimensional

//Numeric Arrays
$arr = array("Tony", "Tom", "Tim");
$arr[0] = "Tony";
$arr[1] = "Tom";
$arr[2] = "Tim";
echo $arr[1] . " and " . $arr[0] . " are friends.";

echo "<br>";
//Associative Arrays
$cars = array("Tony" => "Audi", "RichMan" => "Bently");
echo "Tony likes " . $cars["Tony"];

echo "<br>";
//Multidimensional Arrays: each array can hold another array
//$variable = array("value1", "value2");
$multiarray = array(
    "names" => array("Tony", "Tom", "Tim"),
    "ages" => array(29, 21, 46)
);
echo $multiarray["names"][0] . " is " . $multiarray["ages"][2] . " years old";
echo "<br />";
// This is a simple way to write a multidimensional arrays
$personA["names"][0] = "Tony";
$personA["ages"][0] = 46;
echo $personA["names"][0] . " is " . $personA["ages"][0] . " years old";

echo "<br>";
//Homework
$array = array("Lindy", "Diva", "Binda");
echo $array[0] . ", " . $array[1] . " and " . $array[2] . " are siblings.";

echo "<br>";
$shoes = array("John" => "Nike", "Nick" => "Adidas", "Rjay" => "Afro");
echo "John loves " . $shoes["John"];
echo "<br>";
echo "Nick likes " . $shoes["Nick"];
