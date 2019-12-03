<?php
//Database Connection
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ijdb;
        charset=utf8','dmn1','R1tyMqt8OtfdoS2Z');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql = 'SELECT `joketext` FROM `jokes`';
    $result = $pdo->query($sql);

    while ($row = $result->fetch()) {
        $jokes[] =$row['joketext'];
    }

    $title = 'List of Jokes ';

    ob_start();

    include __DIR__.'/../templates/jokes.html.php';

    $output = ob_get_clean();

}catch (PDOException $e){
    $error ='Unable to connect to the database server.'.$e;
}

include __DIR__ . '/../templates/layout.html.php';