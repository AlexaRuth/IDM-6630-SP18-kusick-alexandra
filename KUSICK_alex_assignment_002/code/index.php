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
       
        
      
      
    <section class="sections"> 
    <?php echo "<h2>Education</h2>"; ?>
        <img src="../img/education.jpg" alt="image for education">  
      
        
     <?php echo "<h2>Technology</h2>"; ?>
      <img src="../img/tech.jpg" alt="image for tech">  
     
        
    <?php echo "<h2>Health</h2>"; ?>
      <img src="../img/health.jpg" alt="image for health">  
    </section> 
      
      
      
    <?php
    
    $section = $_GET['section'];    
         
    if ($section == 'education'){
             include "inc/sections/edu/section-template.php";
         }
    
    if ($section == 'technology'){
             include "inc/sections/tech/section-template.php";
         }
         
    if ($section == 'health'){
             include "inc/sections/health/section-template.php";
         }
         
// TRIED TO FIGURE OUT THE CODE BELOW BUT WASNT ABLE TO JUST YET - 
    // BASED OFF CODE YOU SHARED ...       
    
    // $section = $_GET['section']; 

    // if (isset($_GET['section']) && isset($_GET['article'])) {
          // GET THE NEWS   
         
    // } else if (isset($_GET['section'])) {
           // GET THE SECTION    
         
    // } else if (isset($_GET['article'])) {
           //GET THE ARTICLE   
         
    // } else {
           //GET YOUR HOME PAGE        
     ?>
      
      
  </body>
</html>




