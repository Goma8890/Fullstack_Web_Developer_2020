<?php
//We can create a constant with function define() or with const keyword
define("__Name__", "Antonio Goma");
const Favourite_Car = "Audi";
echo __Name__;
echo "<br>";
echo "I like " . Favourite_Car;
echo "<br>";

//Constant cannot be changed
define("__PERSON__", "Tony Stark");
echo "This person is " . __PERSON__;
echo "<br>";
const __Person__ = "Cap America";
define("__Parson__", "Antman");
echo "The name of the person now is: " . __PERSON__;
