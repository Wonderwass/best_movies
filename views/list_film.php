<?php
require_once "inc/nav.php";
require_once "../models/filmModel.php";

$listFilm = Film::listFilm();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php foreach ($listFilm as $film) { ?>
            <div class="film">
                <h1>
                  
                    <?= $film['title']; ?>
                </h1>
                <h2>
                    <?= $film['number_main_actors']; ?>
                </h2>
                <h2>
                    <?= $film['number_total_actors']; ?>
                </h2>
            </div>
        </div>
    <?php } ?>
</body>

</html>