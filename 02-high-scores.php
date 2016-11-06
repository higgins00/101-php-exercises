<?php
	function highScores($players) {
	}

	// Use this array.
	$players = array(
		"Blossom" => 65,
		"Bubbles" => 76,
		"Buttercup" => 91,
		"Garnet" => 99,
		"Amethyst" => 34,
		"Pearl" => 81,
	);

	foreach ($players as $key => $highScores) {
    	if ($highScores > 90) 
    		echo $key . ' : ' . "$highScores<br />\n";
    }
	

?>

