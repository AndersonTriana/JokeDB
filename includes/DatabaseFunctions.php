<?php
function totalJokes($pdo){
    $query = $pdo->prepare('SELECT COUNT(*) FROM `jokes`');
    $query->execute();

    $row = $query->fetch();

    return $row[0];
}