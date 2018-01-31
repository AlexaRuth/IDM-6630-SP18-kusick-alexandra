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
	

// NOTES
    // http://localhost:8080/?name=test&lastname=test2

    // Accessing Query Strings - create and output values in a query string 
    // echo "<h1>Query Test Page!</h1>"
    // ask to use the data in the query string - 
    // 2 ways to access the string SUPER GLOBAL variable 
    // echo $_Server[QUERY_STRING];   -info about our server test to see what php thinks is in your query string but not the most efficient...
    // echo $_GET; - returns associative array that matchs query string = makes easy to access values in the string.
    // print_r($_GET);
    // echo "<br />";
    // echo $_GET['test2']; - dont have create new variables - data already exist as individual items inside 
    // use $_Server to get all pieces of a string 
    // use $_Get to get specific variables in the string 
        
        
// $movie = array (
    // 'title'=> 'Running Man',
    // 'genre' => 'Sci-Fi');

//foreach ($movie as $key_name => $key_value){
    // echo $key_name . ": ";
    // echo $key_value;
    // echo "<br>";}
 
?>
          