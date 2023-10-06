<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');

mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'INSERT INTO movie (movie_name, movie_type, movie_year, 
	  movie_leadactor, movie_director)
          VALUES ("Jurassic Park", 1, 2022, 1, 2),
                 ("IT", 2, 2017, 2, 1),
                 ("Ocho apellidos vascos", 3, 2015, 3, 3)';

mysqli_query($db,$query) or die(mysqli_error($db));

$query = 'INSERT INTO movietype (movietype_label)
          VALUES ("Ficcion"),
                 ("Terror"),
                 ("Comedia")';

mysqli_query($db, $query) or die(mysqli_error($db));

$query = 'INSERT INTO people (people_fullname, people_isactor, people_isdirector)
          VALUES ("Dani Rovira", 1, 0),
                 ("Ursula Corbero", 1, 0),
                 ("Paco Leon", 0, 1)';

mysqli_query($db, $query) or die(mysqli_error($db));

echo 'Has añadido las tres filas correctamente en cada tabla';
?>