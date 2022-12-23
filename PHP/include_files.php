<?php
//Using include function
//Include_Me.php
//include $path
//$path is either the variable or string direction to the requested file
//No parantheses are required for this function
echo "I am taking $Course <br>"; //Does not display the $Course content

include "Include_Me.php";
// require "fake.php"
echo "I am taking $Course";
