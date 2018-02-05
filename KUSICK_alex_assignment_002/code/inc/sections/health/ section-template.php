<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../../../css/normalize.css">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>WK3 - ASSIGNMENT 3 </title>
  </head>
  <body>
    <?php echo "<h1>EDUCATION IN THE USA</h1>"; ?>
      
     <nav><?php include "../../../inc/nav.php" ?></nav>
       
    <h2>Todays Top Three</h2>
      
    <section class="articles">
          
    <?php

    //STORED KEYED ARRAYS FOR ARTICLES
        $article1 = array(
            'title' => "Former Drug Industry Executive Will lead dept. of health and human services",

            'img' => '../../../img/drugexec.jpg',

            'linkTo' => 'https://www.npr.org/sections/health-shots/2018/01/24/580381981/former-drug-industry-executive-will-lead-dept-of-health-and-human-services',

            'previewText' => "<p>A former pharmaceutical industry official who says drug prices are too high will now be in charge of buying more medications than anyone in the world.</p>",
        );

        $article2 = array(
            'title' => 'Unnecessary Medical Care: More common than you might Imagine',

            'img' => '../../../img/medicalcare.jpg',

            'linkTo' => 'https://www.npr.org/sections/health-shots/2018/02/01/582216198/unnecessary-medical-care-more-common-than-you-might-imagine',

            'previewText' => "<p>What the group found should cause both doctors, and their patients, to rethink that next referral. In a single year:</p>",
        );

        $article3 = array(
            'title' => 'From DACA to DeVos: Education Predictions For 2018',

            'img' => '../../../img/newcompany.jpg',

            'linkTo' => 'https://www.npr.org/sections/thetwo-way/2018/01/30/581804474/amazon-berkshire-hathaway-and-jpmorgan-chase-launch-new-healthcare-company',

            'previewText' => "<p>The new company will be free from profit-making incentives and constraints as it tries to find ways to cut costs and boost satisfaction with the health care plan for employees of Amazon, Berkshire Hathaway and JPMorgan Chase.</p>",
        ); 


      //ORGANIZES THE ABOVE ARRAYS INTO A LIST 
          $my_articlelist = array();

          array_push($my_articlelist, $article1, $article2, $article3);   

          function create_article_lists() {
              foreach($my_articlelist as $newstoday) {
                  make_one_article_list ($newstoday);
              }
          }

      //DEFINES THE MY_MOVIELIST NOTE ITEMS IN THE SQUARE BRAKETS MUST MATCH THE ARRAY NAMES, LOL OOPS!!
          function  make_one_article_list($my_articlelist) {
            echo "<ul>";
              echo "<li><a href='" . $my_articlelist[linkTo] . "'> <h3>$my_articlelist[title]</h3 </a></li>";
              echo "<li><img src='" . $my_articlelist[img] . "' alt='" . $my_articlelist[title] . " Poster'></li>";
              echo "<li>$my_articlelist[previewText]</li>"; 
            echo "</ul";
          }
      
      
      //SHOWS THE ABOVE IN ORDER 
        make_one_article_list($article1);
        make_one_article_list($article2);
        make_one_article_list($article3);
    ?>
        
     </section>
      <footer>
          <p>Alex Kusick _ Week 3 Assignment</p>
      </footer> 
      
  </body>
</html>