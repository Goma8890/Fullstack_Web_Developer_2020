<?php
//explode(): s breaking it off at the desired points(s) and putting each piece into an array.
//exxplode($delimiter, $string, $limit);
//$delimiter is what will break the string apart
//$string is your string or variable
//Optional $limit is how many pieces to make. The last piece holds the rest of the string
$str = "The quick brown fox jumps over the lazy dog.";
$exploded = explode(" ", $str, 4);
foreach ($exploded as $e) {
    echo $e . "<br>";
}
echo "<br>";

//implode(): is taking an array and joining all the values into one value.
//implode($glue, $array);
//$glue is the string that will connect ypur array pieces
//$array is the array you want to connect
$names = array("Bob", "Tim", "Tom");
$newNames = implode(", ", $names);
echo "The three names are " . $newNames;
echo "<br>";



//Using explode and implode to store a lot of information in one variable
echo "<br>";
$UserA = "Bob|39|3|Yes|Benz";
$Part = explode("|", $UserA);
echo $Part[0] . " is " . $Part[1] . " years old. <br>";
echo $Part[0] . " has " . $Part[2] . " kids. <br>";
if ($Part[3] == "Yes") {
    echo "Married.";
} else {
    echo "Not Married.";
}
echo "<br> And drives a " . $Part[4];
echo "<br>";

//Homework
echo "<br>";
$fullName = "Antonio Monteiro Barata Goma";
$ex = explode(" ", $fullName);
echo $ex[0] . "<br>";
echo $ex[1] . "<br>";
echo $ex[2] . "<br>";
echo $ex[3] . "<br>";
echo "<br>";

//$full_Names = array("Antonio Monteiro Barata Goma");
$im = implode(" ", $ex);
echo "My full name is " . $im;
