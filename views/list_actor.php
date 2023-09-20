<?php
require_once "inc/nav.php";
require_once "../models/actorModel.php";

$listActor = Actor::listActor();
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
        <?php foreach ($listActor as $actor) { ?>
            <div class="actor">
                <h1>
                    <?= $actor['name']; ?>
                </h1>
                <h2>
                    <?= $actor['email']; ?>
                </h2>
            </div>
        </div>
    <?php } ?>
</body>

</html>