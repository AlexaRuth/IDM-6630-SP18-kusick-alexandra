<?php

// SCRIPT

echo "<ul>";

	$query_array = $_GET;

	//print_r(query_array); test for names values or both...

		foreach ($query_array as $key_name => $key_value) {
			echo "<li>" . $key_name . ": ";
			echo $key_value . "</li>";
		}

echo "</ul>"
	
 
?>
          