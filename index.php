<?php
include_once __DIR__ . '/db/movies_db.php';
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
    <main class="container">
        <h1 class="text-center pt-5 pb-5">Movies</h1>
        <div class="row row-cols-4 justify-content-center">
            <div class="col">
                <div class="card">
                    <?php
                    echo '<img src="' . $movie1->img . '" alt="' . $movie1->title . '">';
                    ?>
                    <div class="card-body">
                        <?php
                        echo '<h5 class="card-title">' . $movie1->title . '</h5>';
                        ?>
                        <ul class="list-unstyled">
                            <?php
                            echo "<li class='card-text'>
                                    <i class='fa-solid fa-star-of-life'></i>
                                    <span>Director by</span>: 
                                    $movie1->director
                                </li>";
                            echo "<li class='card-text'>
                                <i class='fa-solid fa-star-of-life'></i>
                                <span>Release Year</span>:
                                $movie1->releaseYear
                                </li>";
                            echo "<li class='card-text'>
                                    <i class='fa-solid fa-star-of-life'></i>
                                    <span>Genre</span>:
                                    $movie1->genre
                                </li>";
                            echo "<li class='card-text'>
                                <i class='fa-solid fa-star-of-life'></i>
                                <span>Duration</span>: 
                                $movie1->duration
                                minutes
                            </li>";
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col">
            <div class="card">
                    <?php
                    echo '<img src="' . $movie2->img . '" alt="' . $movie2->title . '">';
                    ?>
                    <div class="card-body">
                        <?php
                        echo '<h5 class="card-title">' . $movie2->title . '</h5>';
                        ?>
                        <ul class="list-unstyled">
                            <?php
                            echo "<li class='card-text'>
                                    <i class='fa-solid fa-star-of-life'></i>
                                    <span>Director by</span>: 
                                    $movie2->director
                                </li>";
                            echo "<li class='card-text'>
                                    <i class='fa-solid fa-star-of-life'></i>
                                    <span>Release Year</span>:
                                    $movie2->releaseYear
                                </li>";
                            echo "<li class='card-text'>
                                    <i class='fa-solid fa-star-of-life'></i>
                                    <span>Genre</span>:
                                    $movie2->genre
                                </li>";
                            echo "<li class='card-text'>
                                    <i class='fa-solid fa-star-of-life'></i>
                                    <span>Duration</span>: 
                                    $movie2->duration
                                    minutes
                                </li>";
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap Js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>