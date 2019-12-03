<?php 
if (isset($_POST['joketext'])) {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=ijdb;
        charset=utf8','dmn1','R1tyMqt8OtfdoS2Z');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = 'INSERT INTO `jokes` SET 
            `joketext`=:joketext,
            `jokedate`= CURDATE()';

        $statement = $pdo->prepare($sql);
        
        $statement->bindValue(':joketext', $_POST['joketext']);

        $statement->execute();

        header('location: jokes.php');
    }catch (PDOException $e){
        $title = 'An error has ocurred';
        $output = 'Database error: '.$e->getMesssage() . ' in' . $e->getFile() . ':' . $e->getLine(); 
    }     
}else{
    $title = 'Add a new joke';

    ob_start();
    
    include __DIR__.'/../templates/addJoke.html.php';

    $output = ob_get_clean();
}

include __DIR__.'/../templates/layout.html.php';