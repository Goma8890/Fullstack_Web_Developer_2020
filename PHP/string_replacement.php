<?php
// str_replace($search, $replace, $subject, $count);
//$search is what you are looking for
//$replace is what you will replace your search-for string with
//$subject is the variable or string to look inside
//$count is how many replacements to do, at a maximum. It is optional
//str_replace can be used in a variable or on its own
$string = "The complete Web Developer";
$replace = str_replace("The", "I am a", $string);
echo $replace;
echo "<br>";

#Using str_replace on its own
$string = "The Complete Web Developer";
echo str_replace("Complete", "Best", $string);
