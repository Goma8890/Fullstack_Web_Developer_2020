<?php
function favCar()
{
    echo "Audi";
}

echo "I really like ";
favCar(); //Calling the function

echo "<br>";
echo "I really like " . favCar();

//Using the return function
function Car()
{
    return "Audi";
}
echo "<br>";

//Using Parameters
function Cars($name)
{
    echo "My favorite car is " . $name;
}
Cars("BMW");
echo "<br>";

function add($a, $b)
{
    $answer = $a + $b;
    return $answer;
}
echo "10 + 5 = " . add(10, 5);
echo "<br>";

//Boolean
function overTen($c, $d)
{
    $total = $c + $d;
    if ($total >= 10) {
        # code...
        return true;
    } else {
        return false;
    }
}
if (overTen(4, 5) == true) {
    # code...
    echo "Our addition function said our result is equal to or greater than 10";
} else {
    echo "Our function's result was below 10.";
}
echo "<br>";

//Finishing Notes
function returnExample()
{
    return "Example string here";
    echo "Another string here";
}
returnExample(); //Does nothing
echo returnExample(); //Will wcho the 1st string, but not the 2nd string.
echo "<br>";

//Homework
// #1
function clothes()
{
    echo "Nike";
}
echo "My shoes is ";
clothes();
echo "<br>";

// #2
function name()
{
    return "Tony";
}
echo " My name is " . name();
echo "<br>";

//#3
function sub($g, $h)
{
    $answer = $g - $h;
    return $answer;
}
echo "8 - 5 = " . sub(8, 5);
echo "<br>";

//#4
function numbers($e, $f)
{

    $total = $e - $f;
    if ($total <= 2) {
        # code...
        return true;
    } else {
        return false;
    }
}
if (numbers(6, 5) == true) {
    # code...
    echo "Our subtraction result is equal to or less than 2";
} else {
    echo "Our function's result was above 2.";
}
echo "<br>";
