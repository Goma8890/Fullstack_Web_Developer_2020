<?php
//For Loops
for ($i = 1; $i <= 5; $i++) {
    # code...
    echo $i . " is the number <br>";
}

$variable = array("Tony", "Toy");
//foreach loops
foreach ($variable as $value) {
    # code...
    echo $value . "<br>";
}

/* Or */

foreach ($variable as $key => $value) {
    # code...
    echo "key: " . $key . " &rarr; " . $value . "<br>";
}
