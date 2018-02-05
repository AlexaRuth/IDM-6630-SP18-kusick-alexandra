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
    <?php echo "<h1>TECHNOLOGY NEWS</h1>"; ?>
      
     <nav><?php include "../../../inc/nav.php" ?></nav>
       
    <h2>Todays Top Three</h2>
      
    <section class="articles">
          
    <?php

    //STORED KEYED ARRAYS FOR ARTICLES
        $article1 = array(
            'title' => "<h3>Automation Could Displace 800 Million Workers Worldwide By 2030, Study Says</h3>",
            'img' => '../../../img/automation.jpg',
            'linkTo' => 'https://www.npr.org/sections/alltechconsidered/2017/11/30/567408644/automation-could-displace-800-million-workers-worldwide-by-2030-study-says',
            'previewText' => "<p>In the year 2030 in countries with advanced economies, a greater proportion of workers will need to learn new skills than in developing economies, researchers say. As many as a third of workers in the U.S. and Germany could need to learn new skills. For Japan, the number is almost 50 percent of the workforce, while in China it's 12 percent.</p>",
            );

        $article2 = array(
            'title' => '<h3>Their Doodles Entertain, But Google Hopes They Spark Important Conversations, Too</h3>',
            'img' => '../../../img/googledraw.jpg',
            'linkTo' => 'https://www.npr.org/sections/alltechconsidered/2017/11/26/565718493/their-doodles-entertain-but-google-hopes-they-spark-important-conversations-too',
            'previewText' => "<p>Google has been sharing its beloved Google doodles with millions of people around the world since 2000. The idea for doodles came in 1998 after Google founders Larry Page and Sergey Brin added a stick figure man to the search engine's logo. It was meant as a comical message to Google users that the founders were 'out of office.' And by out of office, they meant they were at the Burning Man festival.</p>",
            );

        $article3 = array(
            'title' => '<h3>SUCH CRYPTOCURRENCY. SO AMAZE</h3>',
            'img' => '../../../img/dogecoin.jpg',
            'linkTo' => 'https://www.npr.org/sections/money/2018/01/11/577435049/such-cryptocurrency-so-amaze',
            'previewText' => "<p>Jackson sent off a random tweet about Dogecoin — just a throwaway joke. But one thing led to another, and Dogecoin became a real thing. Jackson tried to keep Dogecoin light and fun — it was for learning about cryptocurrency, and giving money to charity.</p>",
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
              echo "<li><a href='" . $my_articlelist[linkTo] . "'> <h2>$my_articlelist[title]</h2> </a></li>";
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