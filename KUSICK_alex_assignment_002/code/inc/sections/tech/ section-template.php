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
    <?php echo "<h1>TECHNOLOGY IN THE USA</h1>"; ?>
      
     <nav><?php include "../../../inc/nav.php" ?></nav>
       
    <h2>Todays Top Three</h2>
      
    <section class="articles">
          
    <?php

    //STORED KEYED ARRAYS FOR ARTICLES
        $article1 = array(
            'title' => "Why Schools Fail To Teach Slavery’s ‘Hard History'",
            'img' => '../../../img/eduslavery.jpg',
            'linkTo' => 'https://www.npr.org/sections/ed/2018/02/04/582468315/why-schools-fail-to-teach-slaverys-hard-history',
            'previewText' => "<p>What do you think nearly half the students today believe is the reason the south succeeded the nation? Click to read more</p>",
            );

        $article2 = array(
            'title' => 'Outcry After Louisiana Teacher Arrested During School Board Meeting',
            'img' => '../../../img/arrest.jpg',
            'linkTo' => 'https://www.npr.org/sections/thetwo-way/2018/01/10/577010534/outcry-after-louisiana-teacher-arrested-during-school-board-meeting',
            'previewText' => "<p>The dramatic arrest on Monday — which was caught on video — has drawn outrage in the U.S. and beyond.</p>",
            );

        $article3 = array(
            'title' => 'From DACA to DeVos: Education Predictions For 2018',
            'img' => '../../../img/devos.jpg',
            'linkTo' => 'https://www.npr.org/sections/ed/2018/01/02/569161619/from-daca-to-devos-education-predictions-for-2018',
            'previewText' => "<p>I've always found this a fun thought exercise, and, at some point, my editor suggested I jot down my answers and share them beyond our cubicles. And so, here are a few predictions for 2018.</p>",
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