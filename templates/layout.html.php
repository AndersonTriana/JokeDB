<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title><?= $title ?></title>
    <style>

        
        ul {
            list-style-type:none;
            margin: 0;
            padding: 0;
            width: 120px;
            background-color: #f1f1f1;
        }

        li a {
            display: block;
            padding: 8px 16px;
            color: #000;
            text-decoration: none;
        }

        li a.active {
            background-color: #4CAF50;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }
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

    <footer>
        &copy; IJDB 2019
    </footer>        
</body>
</html>