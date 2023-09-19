<?php

class Movie
{
    public string $title;
    public string $director;
    public int $releaseYear;
    public string $genre;
    public $img;
    public int $duration;

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
}