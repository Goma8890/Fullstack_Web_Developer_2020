<?php
$people = array('Tony', 'Dario', 'Toy', 'Family' => array('Preciosa', 'Sandy', 'Todd'));
foreach ($people as $name) {
    # code...
    if (is_array($name)) {
        # code...
        continue;
    }
    //no need for else statement
    echo $name . " ";
}
echo "<br>";

//Using is_array
//is_array($var);
//$var is the variable to test. This will return true or false based on the $var
$array = array(1, 3, 5, 7, 11);
$string = "I am a string";
if (is_array($array)) {
    # code...
    echo '$array is an array'; // retunr true
}

if (is_array($string)) {
    # code...
    echo '$string is an array'; // retunr false
}

echo "<br>";
//Quotations or Apostrophes
//Double quotes allows us to use variables inside the string and it will still return the variale value.
//Single quotes (Apostrophes) do not accept variable values and will show exactly what you write.
$Name = "Tony";
echo "My name is $Name"; //Displays "Tony"
echo "<br>";
echo 'My name is $Name'; //Displays $Name

echo "<br>";
//Homework
$variable = array(4, 45, 88, 'Number' => array(0, 11, 33));
$strin = "Billionaire";
foreach ($variable as $number) {
    # code...
    if (is_array($number)) {
        # code...
        continue;
    }
    //no need for else statement
    echo $number . " ";
}
echo "<br>";
echo "Tony is a $strin";
echo "<br>";
echo 'Tony is $string';
