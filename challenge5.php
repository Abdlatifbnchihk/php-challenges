<?php

$counter1 = 0;

echo "The task 01" . "</br>";
while($counter1 < 10) {
    $counter1 += 1;
    echo $counter1 . "</br>";
}


echo "The task 02" . "<br>";

for($i = 10; $i >= 1; $i--){
    echo $i . "<br>";
};


echo "The task 03" . "<br>";

$counter2 = 0;

while($counter2 < 20) {
    $counter2 = $counter2 + 2;
    echo $counter2 . "</br>";
}


echo "The task 04" . "<br>";

$counter3 = 0;
for($e = 1; $e <= 50; $e++){
    if($e % 2 == 0) {
        $counter3++;
    }
    // echo $e . "<br>";
}
echo "The total of even numbers is : " . "\n" . $counter3 . "</br>";

echo "The task 05" . "<br>";
for($a = 1; $a <= 10; $a++) {
    echo "*";
}


echo "The task 06" . "<br>";
// $counter4 = 0;

for ($i = 1; $i <= 5; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}









?>