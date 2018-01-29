<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>WK2 - ASSIGNMENT 2 </title>
  </head>
  <body>
     <?php echo "<h1> Some Favorite Movies </h1>"; ?>
      
      
    <h2>In No Particular Order</h2>
 
<?php
      
      
    // STORED KEYED ARRAY 
      
    $movie1 = array(
        'title' => 'Jodorowskys Dune',
        'imdbURL' => 'http://www.imdb.com/title/tt1935156/',
        'year' => 2014,
        'score' => 98,
        'genre' => 'Documentry',
        'posterURL' => '/img/dune.png'
        );

    $movie2 = array(
        'title' => 'Legend',
        'imdbURL' => 'http://www.imdb.com/title/tt0089469/?ref_=nv_sr_6',
        'year' => 1985,
        'score' => 42,
        'genre' => 'Sci-Fi',
        'posterURL' => '/img/legend.png'
        );

    $movie3 = array(
        'title' => 'Big Trouble In Little China',
        'imdbURL' => 'http://www.imdb.com/title/tt0090728/?ref_=nv_sr_1',
        'year' => 1986,
        'score' => 82,
        'genre' => 'Comedy Adventure, Sci-Fi',
        'posterURL' => '/img/big.png'
        ); 
      
    $movie4 = array(
        'title' => 'Arrival',
        'imdbURL' => 'http://www.imdb.com/title/tt2543164/',
        'year' => 2016,
        'score' => 94,
        'genre' => 'Mystery Sci-Fi',
        'posterURL' => '/img/arrival.png'
        );

    $movie5 = array(
        'title' => 'There Will Be Blood',
        'imdbURL' => 'http://www.imdb.com/title/tt0469494/?ref_=nv_sr_1',
        'year' => 2008,
        'score' => 91,
        'genre' => 'Drama',
        'posterURL' => '/img/blood.jpg'
        );
      

      $my_movielist = array();

      array_push($my_movielist, $movie1, $movie2, $movie3, $movie4, $movie5);   
      

      function create_movie_lists() {
          foreach($my_movielist as $current_movie) {
              make_one_movie_list($current_movie);
          }
      }


      function make_one_movie_list($movie_to_list) {
          echo "<ul>";
          echo "<li><h3>$movie_to_list[title]</h3></li>";
          echo "<li><a href=" . $movie_to_list[imdbURL] .">IMDB</a></li>";
          echo "<li>$movie_to_list[year]</li>";
          echo "<li>$movie_to_list[score]</li>";
          echo "<li>$movie_to_list[genre]</li>";
          echo "<li><img src=" . $movie_to_list[posterURL] . "></li>";
          echo "</ul";
  // OF COURSE, your echo output should have mark up!
}
      

                            //THE FUNCTION - BASED ON FEEDBACK TO NICK...      
                            //function cora_Facts($arrayToList) {
                            //   echo "<ul>";

                            //  foreach ($arrayToList as $value) {
                            //      echo "<li>$value</li>"; 
                            //  }

                            //   echo "</ul>";
                            // }
                            // cora_Facts($aboutCora)

    ?>
     
      
      
  </body>
</html>