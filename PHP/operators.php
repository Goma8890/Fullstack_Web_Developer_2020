<?php
//Arithmetic Operators is just basic maths (+, -, *, /, %, ++, --)
//Law of Maths BEDMAS: Brackets, Exponents, Division/Multiplication and Addition/Subtraction
$x = 15;
echo $x + 5;
echo "<br>";
echo $x - 5;
echo "<br>";
echo $x * 5;
echo "<br>";
echo $x / 5;
echo "<br>";
echo $x % 5;
echo "<br>";
echo $x++;
echo "<br>";
echo $x--;
echo "<br>";

//Assigment Operators (=, +=, -=, *=, /=, .=, %=)
//$x = $y -> $x = $y
//$x += $y -> $x = $x + $y
//$x -= $y -> $x = $x - $y
//$x *= $y -> $x = $x * $y
//$x /= $y -> $x = $x / $y
//$x .= $y -> $x = $x . $y (like string concatenation)
//$x %= $y -> $x = $x % $y

//Comparison Operators used in if else statement (==, !=, <>, >, >=, <, <=)
echo "<br>";
$z = 15;
if ($z == 15) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

if ($z != 15) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";
//Another way of saying not equal to same as !=
if ($z <> 15) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

if ($z > 5) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

if ($z >= 5) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

if ($z < 5) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

if ($z <= 5) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";


//Logical Operatos (&& -> and, || -> or, ! -> not)
echo "<br>";
$y = 10;
if ($x > 0 && $y < 20) {
    echo "True";
} else {
    echo "False";
}

echo "<br>";
$y = 10;
if ($x == 5 || $y == 10) {
    echo "True";
} else {
    echo "False";
}

echo "<br>";
$y = 10;
if (!($x == $y)) {
    echo "True";
} else {
    echo "False";
}
echo "<br>";

//HomeWork arithmetic and assignment operators
//Arithmetic Operators
echo "<br>";
$p = 20;
echo $p * 5;
echo "<br>";
echo $p++;
echo "<br>";
echo $p--;

//Assigment Operators
echo "<br>";
echo $p += $x;
echo "<br>";
echo $p %= $x;
