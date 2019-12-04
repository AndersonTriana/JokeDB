<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=ijdb;
    charset=utf8','dmn1','R1tyMqt8OtfdoS2Z');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'DELETE FROM `jokes` WHERE `id` = :id';

    $statement = $pdo->prepare($sql);
    $statement->bindValue(':id', $_POST['id']); 
    $statement->execute();

    header('location: jokes.php');

} catch (PDOException $e) {
    $title = 'An error has ocurred.';
    $output = 'Unable to connect the database server: '.$e;
}

include __DIR__.'/../templates/layout.html.php';