<?php
	function returnRsvps($array) {
		// Your function will be written here.
}

	// Fill in the array below with the names of your guests:
	$guests = array(
		"Alex", 
		"Nikki", 
		"Sumeet",
	);

	$returnRsvps = count($guests);

	$lastPerson = array_pop($guests); // c
	$rsvpNames = implode(", ", $guests); // a, b
	$rsvpNames .= " and ".$lastPerson; // a, b and c


	// Call the function, passing in the $guests array:
	 echo "Your event has " . $returnRsvps . " RSVPs: " . $rsvpNames . ".";
?>
