<?php
try {
    include __DIR__.'/../includes/DatabaseConnection.php';
    include __DIR__.'/../includes/DatabaseFunctions.php';

    deleteJoke($pdo, $_POST['id']);

    header('location: jokes.php');

} catch (PDOException $e) {
    $title = 'An error has ocurred.';
    $output = 'Unable to connect the database server: '.$e;
}

include __DIR__.'/../templates/layout.html.php';