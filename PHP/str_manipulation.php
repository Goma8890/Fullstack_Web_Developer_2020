<?php
//substr($string, $start, $length);
//$string is the string you are extracting from
//$start is the numerical value of where to start
//$length will tell PHP how many characters to extract. It is optional
$string = "My name is Antonio";
echo "Your instructor is " . substr($string, 11, 7);
echo "<br>";

//Uppercase
//ucwords(Sstring);
//$string is your sentence, variable or regular string
$string = "no capital letters in here";
echo ucwords($string);
echo "<br>";

//Capitals
//strtoupper();
//$str is the variable or the string to change to all upper case letters
echo strtoupper("big letters"); //prints BIG LETTERS
echo "<br>";
$string = "all little letters";
echo strtoupper($string); //prints ALL LITTLE LETTERS
echo "<br>";

//Lowercase
//strtolower();
//$str is the variable or the string to change to all lower case letters
echo strtolower("SHRINK US!");
echo "<br>";
$str = "SHRINK ALL OF US TOO!";
echo strtolower($str);
