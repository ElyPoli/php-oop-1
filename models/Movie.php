<?php

class Movie
{
    public string $title;
    public string $director;
    public $releaseYear;
    public $genre;
    public $img;
    public $duration;

    // Costruttore
    function __construct($_title, $_director)
    {
        $this->title = $_title;
        $this->director = $_director;
    }

    // Se non è presente un'immagine ne metto una di default
    public function defaultImg($_img)
    {
        if (is_null($_img)) {
            return $this->img = "img/default-img.jpg";
        }
    }

    // Aggiungere un nuovo genere all'array
    public function addNewGenre($_genre) {
        $this->genre[] = $_genre;
    }
}