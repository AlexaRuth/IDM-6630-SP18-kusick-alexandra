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

    //STORED KEYED ARRAYS OR MOVIE DATA
        $movie1 = array(
            'title' => 'Jodorowskys Dune',
            'imdbURL' => 'http://www.imdb.com/title/tt1935156/',
            'year' => 2014,
            'score' => 98,
            'genre' => 'Documentry',
            'poster' => '/img/dune.png'
            );

        $movie2 = array(
            'title' => 'Legend',
            'imdbURL' => 'http://www.imdb.com/title/tt0089469/?ref_=nv_sr_6',
            'year' => 1985,
            'score' => 42,
            'genre' => 'Sci-Fi',
            'poster' => '/img/legend.png'
            );

        $movie3 = array(
            'title' => 'Big Trouble In Little China',
            'imdbURL' => 'http://www.imdb.com/title/tt0090728/?ref_=nv_sr_1',
            'year' => 1986,
            'score' => 82,
            'genre' => 'Comedy Adventure, Sci-Fi',
            'poster' => '/img/big.png'
            ); 

        $movie4 = array(
            'title' => 'Arrival',
            'imdbURL' => 'http://www.imdb.com/title/tt2543164/',
            'year' => 2016,
            'score' => 94,
            'genre' => 'Mystery Sci-Fi',
            'poster' => '/img/arrival.png'
            );

        $movie5 = array(
            'title' => 'There Will Be Blood',
            'imdbURL' => 'http://www.imdb.com/title/tt0469494/?ref_=nv_sr_1',
            'year' => 2008,
            'score' => 91,
            'genre' => 'Drama',
            'poster' => '/img/blood.jpg'
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
                  echo "<li><a href=' . $my_movielist[imdbURL] . '>IMDB</a></li>";
                  echo "<li>$my_movielist[year]</li>";
                  echo "<li>$my_movielist[score]</li>";
                  echo "<li>$my_movielist[genre]</li>";
                  echo "<li><img src=' . $my_movielist[poster] . '></li>";
              echo "</ul";
          }
      
      //SHOWS THE ABOVE IN ORDER 
        make_one_movie_list($movie1);
        make_one_movie_list($movie2);
        make_one_movie_list($movie3);
        make_one_movie_list($movie4);
        make_one_movie_list($movie5);
      
    ?>
     
      
      
  </body>
</html>