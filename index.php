<?php 
    include __DIR__ . '/./classes.php';

    $firstMovie = new Movie("Signore degli anelli", "18/01/2002", "Fantasy");
    $secondMovie = new Movie("Venerdì 13", "09/05/1980", "Horror");

    $moviesCollection = [];
    array_push($moviesCollection, $firstMovie, $secondMovie);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-OOP-1</title>
</head>
<body>
    <h3>I film selezionati sono:</h3>

    <ul>
        <?php foreach ($moviesCollection as $movie) {?>
            <li>
                Titolo: 
                <?php echo $movie->getTitle() ?> <br>

                Data di uscita:
                <?php echo $movie->getExitDate() ?> <br>

                Genere:
                <?php echo $movie->getGenre() ?> <br>
            </li>
        <?php } ?>
    </ul>
</body>
</html>