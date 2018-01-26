<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>WK2 - CHECK IN 2.2 </title>
  </head>
  <body>
     <?php echo "<h1> Cora Rose Fox </h1>"; ?>
      
    <img src="../img/bedtime.png" alt="cora the dog">
      
    <h2>Quick Facts</h2>
 
<?php
    //THE VARIABLES
        $age = "4.5";
        $gender = "Female";
        $breed = "Aussie Shepard";
        $foreverHome = "4";
        $favWord = "Daycare";
    
        //ARRAY VERSION 1 - WITH VARIABLES... not sure which version is more effiecient here to meet the check in.... 
    
        //$aboutCora = array(4.5,"Female","Aussie Shepard Mix",4,"Daycare"); 
    
    //ARRAY VERSION 2 
        $aboutCora = array($age, $gender, $breed, $foreverHome, $favWord);     
            

    //THE FUNCTION - BASED ON FEEDBACK TO NICK...      
        function cora_Facts($arrayToList) {
            echo "<ul>";

            foreach ($arrayToList as $value) {
                echo "<li>$value</li>"; 
            }
            
            echo "</ul>";
        }
        cora_Facts($aboutCora)

    ?>
     
      
      
  </body>
</html>