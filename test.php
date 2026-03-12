<?php

// indexd array
// $seating_list = [
//     ["A1", "A2", "A3"],
//     ["B1", "B2", "-"],
//     ["C1", "-", "C3"],
// ];

// for($row = 0; $row < count($seating_list); $row++) {
//     echo "the row" . $row . "</br>";
//     for($s = 0; $s < count($seating_list[$row]); $s++) {
//         print_r($seating_list[$row][$s]) . "</br>";
//         $seat_per_row = $seating_list[$row][$s];
//         if($seat_per_row == "-") {
//             $seat_per_row = "X";
//         }
//         echo($seat_per_row) . "\t";
//     }
//     echo "\n";
// }

$name = "abde llatif";


$names = explode(" " , $name);


print_r($names);


?>