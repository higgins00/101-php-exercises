<?php
	function returnRsvps($array) {
	}

	$guests = array(
		"Alex", 
		"Nikki", 
		"Sumeet",
	);

	$returnRsvps = count($guests);
	$lastPerson = array_pop($guests); // pop last guest's name
	$rsvpNames = implode(", ", $guests); // add comma to all other guests
	$rsvpNames .= ", and ".$lastPerson; // guests and last guest

	 echo "Your event has " . $returnRsvps . " RSVPs: " . $rsvpNames . ".";
?>