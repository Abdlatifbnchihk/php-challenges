<?php 

$frindes = [
    "yassin" => 120,
    "hassan" => 170,
    "ahmed" => 100,
    "ali" => 40,
    "tarik" => 60,
];

$total = 0;

foreach($frindes as $name => $money) {

    $total += $money;

    if($money >= 100) {
        echo "I have more than 100 of many " . $name . "<mark> \n" . $money. "</mark> \n" . "<br>";
    } else {
        echo "I have less than 100 of many " . $name . " \n" . $money . "<br>";
    }
}

echo "The total of many is :" ." \n" . $total;

?>