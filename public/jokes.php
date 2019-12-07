<?php
//Database Connection
try {
    include __DIR__.'/../includes/DatabaseConnection.php';
    include __DIR__ . '/../includes/DatabaseFunctions.php';
    
    $sql = 'SELECT `jokes`.`id`, `joketext`, `name`, `email` 
        FROM `jokes` INNER JOIN `author` ON `authorid` = `author`.`id`'; //query
        
    $jokes = $pdo->query($sql);//query execution and save in a variable
    
    $title = 'List of Jokes ';

    $totalJokes = totalJokes($pdo);

    ob_start();

    include __DIR__.'/../templates/jokes.html.php';

    $output = ob_get_clean();

}catch (PDOException $e){
    
    $error ='Unable to connect to the database server.'.$e;

}

include __DIR__ . '/../templates/layout.html.php';