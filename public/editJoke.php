<?php
include __DIR__.'/../includes/DatabaseConnection.php';
include __DIR__.'/../includes/DatabaseFunctions.php';

try {
    if(isset($_POST['joketext'])){
        updateJoke($pdo, $_POST['jokeid'], $_POST['joketext'], 1);

        header('location: jokes.php');
    }else{
        $joke = getJoke($pdo, $_GET['id']);

        $title = 'Edit Joke';

        ob_start();

        include __DIR__.'/../templates/editJoke.html.php';

        $output = ob_get_clean();
    }    
} catch (PDOException $e) {
    $title = 'An error has ocurred.';
    $output = 'Unable to connect the database server: '.$e;
}

include __DIR__.'/../templates/layout.html.php';