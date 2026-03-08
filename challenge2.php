<?php 
$age = 30;
$price = null;
if($age <= 12) {
    $price = 20;
    echo "Special: Children's Menu included!" . "$price" . "DH";
} 
else if($age < 18) {
    $price = 40;
    echo "Special: Children's Menu included!" . "$price" . "DH";
}
else if ($age > 60) {
    $price = 30;
    echo "Special: Children's Menu included!" . "$price" . "DH";
} 
else {
    echo "the price is 60 DH";
}
?>