<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title><?= $title ?></title>
    <style>

        

    </style>
</head>
<body>
    <nav >
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="jokes.php">Jokes List</a></li>
            <li><a href="addJoke.php">Add Joke</a></li>
        </ul>
    </nav>
    <?= $output ?>

    <?php include __DIR__.'/footer.html.php'; ?>      
</body>
</html>