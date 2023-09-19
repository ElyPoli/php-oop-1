<?php
include_once __DIR__ . '/db/movies_db.php';

// Dall'array dei film creo un'array di istanze della classe "movie"
$moviesList = array_map(function ($singleElement) {
    $movie = new Movie($singleElement['title'], $singleElement['director']);
    $movie->releaseYear = $singleElement['releaseYear'];
    $movie->genre = $singleElement['genre'];
    $movie->duration = $singleElement['duration'];
    $movie->img = $singleElement['img'];

    return $movie;
}, $rawMoviesList);

// Verifico se in ogni film è presente l'immagine di copertina
foreach ($moviesList as $singleElement) {
    if ($singleElement->img === null) {
        $singleElement->img = $singleElement->defaultImg($singleElement->img);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 51: PHP OOP 1</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Icone FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Icona -->
    <link rel="icon" href="img/icon-logo.png">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="container pb-5">
        <h1 class="text-center pt-5 pb-5">Movies</h1>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 justify-content-center gy-4">
            <?php foreach ($moviesList as $movie) { ?>
                <div class="col">
                    <div class="card">
                        <?php
                        echo '<img class="card-img-top my-card-img" src="' . $movie->img . '" alt="' . $movie->title . '">';
                        ?>
                        <div class="card-body">
                            <?php
                            echo '<h5 class="card-title">' . $movie->title . '</h5>';
                            ?>
                            <ul class="list-unstyled">
                                <?php
                                echo "<li class='card-text'>
                                    <i class='fa-solid fa-star-of-life'></i>
                                    <span>Director by</span>: 
                                    $movie->director
                                </li>";
                                echo "<li class='card-text'>
                                <i class='fa-solid fa-star-of-life'></i>
                                <span>Release Year</span>:
                                $movie->releaseYear
                                </li>";
                                echo "<li class='card-text'>
                                    <i class='fa-solid fa-star-of-life'></i>
                                    <span>Genre</span>:
                                    $movie->genre
                                </li>";
                                echo "<li class='card-text'>
                                <i class='fa-solid fa-star-of-life'></i>
                                <span>Duration</span>: 
                                $movie->duration
                                minutes
                            </li>";
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>