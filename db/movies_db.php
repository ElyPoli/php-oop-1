<?php
require_once __DIR__ . '/../models/Movie.php';

$movie1 = new Movie('Il Labirinto del Fauno', 'Guillermo del Toro');
$movie1->releaseYear = 2006;
$movie1->genre = 'Drammatico';
$movie1->duration = 118;
$movie1->img = 'https://pad.mymovies.it/filmclub/2006/05/316/locandina.jpg';

// Verifico se il film1 ha un'immagine di copertina
if ($movie1->img === null) {
    $movie1->img = $movie1->defaultImg($movie1->img);
}

$movie2 = new Movie('Il Caso di Thomas Crawford', 'Gregory Hoblit');
$movie2->releaseYear = 2007;
$movie2->genre = 'Thriller';
$movie2->duration = 113;

// Verifico se il film2 ha un'immagine di copertina
if ($movie2->img === null) {
    $movie2->img = $movie2->defaultImg($movie2->img);
}


?>
