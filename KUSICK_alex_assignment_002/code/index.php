<?php

// SCRIPT

$queryarray = $_GET;

	//print_r(query_array); test for names values or both...

foreach ($queryarray as $keyname => $bool) {
    
    if ($bool == true){
        
     echo "variable value," . $keyname .", " "value is true";
 } else{
     echo echo "variables value," . $keyname .", " " value is false";
 } 
}

?>


<?php

// SCRIPT NOTES

 
// NEGATIVE - 
// $test =50;   
// if ($test != 100) {
// echo "The number is not 100!";
// }   
 
// $test =100;
// $string = "this is just a test!";
// $bool = true;
    
// if ($bool == true) {
// echo "The value was true!";
// } else{
// echo "The value was false!";
// } 
        

?>
          