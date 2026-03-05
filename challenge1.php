<?php
	$Price = 10;          // price of one tea (DH)
	$numberOfTeas = 4;                           
	$isStudent = false;
	// true if student, false if not
	$normalPrice = $Price * $numberOfTeas;

	if($isStudent && $numberOfTeas >= 5) {

		$totalPrice =($normalPrice * 0.8) - $numberOfTeas;

	} else if($isStudent && $numberOfTeas < 5) {

		$totalPrice =$normalPrice * 0.8;

	} else if ($isStudent ==false && $numberOfTeas >5) {

		$totalPrice = $normalPrice - $numberOfTeas;
	} else {

		$totalPrice = $normalPrice;
	}

	echo 'the totale price is :'. $totalPrice .' DH'

?>
 