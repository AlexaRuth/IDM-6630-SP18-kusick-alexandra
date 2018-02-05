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

 //$section = $_GET['section'];
      // echo "<h2>" . $section . "</h2>"; 
      // echo "<h3>" . $_GET['article'] . "</h3>"
      
    
    
    //calls up this section ... 
        // $section = $_GET['section'];
        //echo $section;
         
        // if ($section == 'sports'){
        //    include 'inc/sections/sports/section-template.php';
         }
    
    
         
//chain diffrent sections together
         
         
$section = $_GET['section'];
         
  if (isset($_GET['section'])){
      
      
      $section = $_GET['section'];  
  }       
         
         
  inculde 'inc/sections/' . $section . '/section-template.php';       
         
   
