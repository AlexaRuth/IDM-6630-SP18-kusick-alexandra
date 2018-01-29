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
 
    
    <section class="movielist">
          
    <?php

    //STORED KEYED ARRAYS OR MOVIE DATA
        $movie1 = array(
            'title' => 'Jodorowskys Dune',
            'poster' => '/img/dune.png',
            'imdbURL' => 'http://www.imdb.com/title/tt1935156/',
            'year' => 2014,
            'score' => 98,
            'genre' => 'Documentry'
            );

        $movie2 = array(
            'title' => 'Legend',
            'poster' => '/img/legend.png',
            'imdbURL' => 'http://www.imdb.com/title/tt0089469/?ref_=nv_sr_6',
            'year' => 1985,
            'score' => 42,
            'genre' => 'Sci-Fi'
            );

        $movie3 = array(
            'title' => 'Big Trouble In Little China',
            'poster' => '/img/big.png',
            'imdbURL' => 'http://www.imdb.com/title/tt0090728/?ref_=nv_sr_1',
            'year' => 1986,
            'score' => 82,
            'genre' => 'Comedy Adventure, Sci-Fi'
            ); 

        $movie4 = array(
            'title' => 'Arrival',
            'poster' => '/img/arrival.png',
            'imdbURL' => 'http://www.imdb.com/title/tt2543164/',
            'year' => 2016,
            'score' => 94,
            'genre' => 'Mystery Sci-Fi'
            
            );

        $movie5 = array(
            'title' => 'There Will Be Blood',
            'poster' => '/img/blood.png',
            'imdbURL' => 'http://www.imdb.com/title/tt0469494/?ref_=nv_sr_1',
            'year' => 2008,
            'score' => 91,
            'genre' => 'Drama'
            );

      
      //ORGANIZES THE ABOVE ARRAYS INTO A LIST 
          $my_movielist = array();

          array_push($my_movielist, $movie1, $movie2, $movie3, $movie4, $movie5);   

          function create_movie_lists() {
              foreach($my_movielist as $current_movie) {
                  make_one_movie_list($current_movie);
              }
          }

      //DEFINES THE MY_MOVIELIST NOTE ITEMS IN THE SQUARE BRAKETS MUST MATCH THE ARRAY NAMES, LOL OOPS!!
          function make_one_movie_list($my_movielist) {
            echo "<ul>";
              echo "<li><h3>$my_movielist[title]</h3></li>";
              echo "<li><img src='" . $my_movielist[poster] . "' alt='" . $my_movielist[title] . " Poster'></li>";
              echo "<li><a href='" . $my_movielist[imdbURL] . "'>IMDB</a></li>";
              echo "<li>$my_movielist[genre]</li>"; 
              echo "<li>$my_movielist[year]</li>";
              echo "<li>$my_movielist[score]</li>";
            echo "</ul";
          }
      
      
      //SHOWS THE ABOVE IN ORDER 
        make_one_movie_list($movie1);
        make_one_movie_list($movie2);
        make_one_movie_list($movie3);
        make_one_movie_list($movie4);
        make_one_movie_list($movie5);
      
    ?>
        
     </section>
      
      <footer>
          <p>Alex Kusick _ Week 2 Assignment </p>
      </footer> 
      
  </body>
</html>