<?php
$names = $arrayName = array('Tony', 'Toy', 'Dario', 'Dorinho');
foreach ($names as $person) {
    if ($person == "Dario") {
        # code...
        echo "You are: " . $person;
        break;
    }
}

echo '<br>';
//Homework
$a = 1;
while ($a <= 10) {
    # code...
    echo $a . "<br>";
    $a++;
    if ($a == 6) {
        # code...
        echo "Limit reached. Number equal: " . $a;
        break;
    }
}
