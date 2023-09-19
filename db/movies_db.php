<?php
require_once __DIR__ . '/../models/Movie.php';

// Creo un array con la lista dei film
$rawMoviesList = [
    [
        'title' => 'Il Labirinto del Fauno',
        'director' => 'Guillermo del Toro',
        'releaseYear' => 2006,
        'genre' => 'Drammatico',
        'img' => 'https://pad.mymovies.it/filmclub/2006/05/316/locandina.jpg',
        'duration' => 118
    ],
    [
        'title' => 'Il Caso di Thomas Crawford',
        'director' => 'Gregory Hoblit',
        'releaseYear' => 2007,
        'genre' => 'Thriller',
        'img' => null,
        'duration' => 113
    ],
    [
        'title' => 'Il Pianista',
        'director' => 'Roman Polanski',
        'releaseYear' => 2002,
        'genre' => 'Biografico',
        'img' => 'https://mr.comingsoon.it/imgdb/locandine/235x336/1548.jpg',
        'duration' => 150
    ],
    [
        'title' => 'La La Land',
        'director' => 'Damien Chazelle',
        'releaseYear' => 2016,
        'genre' => 'Musical',
        'img' => 'https://aforismi.meglio.it/img/film/La_La_Land.jpg',
        'duration' => 128
    ],
    [
        'title' => 'Alien',
        'director' => 'Ridley Scott',
        'releaseYear' => 1979,
        'genre' => 'Horror',
        'img' => null,
        'duration' => 117
    ],
    [
        'title' => 'Pulp Fiction',
        'director' => 'Quentin Tarantino',
        'releaseYear' => 1994,
        'genre' => 'Drammatico',
        'img' => 'https://pad.mymovies.it/filmclub/2006/08/102/locandina.jpg',
        'duration' => 154
    ],
    [
        'title' => 'Jurassic Park',
        'director' => 'Steven Spielberg',
        'releaseYear' => 1993,
        'genre' => 'Avventura',
        'img' => 'https://pad.mymovies.it/filmclub/2006/05/125/locandina.jpg',
        'duration' => 127
    ],
    [
        'title' => 'Il Signore degli Anelli: Le Due Torri',
        'director' => 'Peter Jackson',
        'releaseYear' => 2002,
        'genre' => 'Fantasy',
        'img' => 'https://www.jrrtolkien.it/wp-content/uploads/2014/01/Il-signore-degli-anelli-le-due-torri.jpg',
        'duration' => 179
    ],
    [
        'title' => 'Interstellar',
        'director' => 'Christopher Nolan',
        'releaseYear' => 2014,
        'genre' => 'Sci-Fi',
        'img' => 'https://pad.mymovies.it/filmclub/2014/01/001/locandina.jpg',
        'duration' => 169
    ]
];