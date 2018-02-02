<?php

// SCRIPT

$queryArray = $_GET;

	//print_r(query_array); test for names values or both...
    
foreach ($queryArray as $keyName => $bool) {
    
$bool = true;
    
    if ($bool == true){
        
     echo "variable", ".' $keyName '.", "The value is true.";
     } else{
     echo "variable", ".' $keyName '.", "The value is false.";
 } 
}

?>


