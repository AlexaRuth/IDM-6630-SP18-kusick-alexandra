<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>WK3 - NEWS SITE</title>
  </head>
  <body>
     <?php echo "<h1>YOUR DAILY NEWS!</h1>"; ?>
     <nav><?php include "inc/nav.php" ?></nav>
       
      
    <?php
            
         
if (isset($_GET['section']) && isset($_GET['article'])) {
    // GET THE SECTION
} else if (isset($_GET['section'])) {
    // GET THE SECTION
} else if (isset($_GET['article'])) {
    //GET THE ARTICLE
} else {
    //GET YOUR HOME PAGE
}         
     ?>
      
    
      
      
      
  </body>
</html>




