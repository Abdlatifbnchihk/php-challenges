<?php
	$Price = 10;          // price of one tea (DH)
	$numberOfTeas = 10;                           
	$isStudent = true;
	// true if student, false if not
	$normalPrice = $Price * $numberOfTeas;
	echo "this is a result of normalPrice ====== " . "$normalPrice";

	if($isStudent && $numberOfTeas >= 5) {

		$totalPrice =($normalPrice * 0.8) - $numberOfTeas;

	} else if($isStudent && $numberOfTeas < 5) {

		$totalPrice = $normalPrice * 0.8;

	} else if ($isStudent == false && $numberOfTeas > 5) {

		$totalPrice = $normalPrice - $numberOfTeas;
	} else {
		$totalPrice = $normalPrice;
	}

	echo 'the totale price is :'. $totalPrice .' DH'

?>
 