<?php

$names = ["ali", "tarik", "khalid"];
// add item to array first way
$names[] = "hassan";

// add item to array second way push it add the new item to end of array
array_push($names, "abdo", "ahmed");

$length = count($names);

$check = in_array("abdo", $names);

echo $check . "</br>";

for($name = 0; $name < $length; $name++) {
    echo $names[$name] . "</br>";
}


$tttt1 = ["hello"];
$tttt2 = ["good"];

$totle = array_merge($tttt1, $tttt2);

print_r($totle);





?>