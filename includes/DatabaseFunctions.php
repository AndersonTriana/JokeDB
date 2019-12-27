<?php
function totalJokes($pdo){
    $query = query($pdo, 'SELECT COUNT(*) FROM `jokes`');
    $row = $query->fetch();

    return $row[0];
}

function getJoke($pdo, $id){
    $query = query($pdo, 'SELECT * FROM `jokes` WHERE `id` = :id', $parameters);
    $parameters = [':id' => $id];

    return $query->fetch();
}

function insertJoke($pdo, $joketext, $authorid){
    $query = 'INSERT INTO `jokes` (`joketext`, `jokedate`, `authorid`) 
        VALUES (:joketext, CURDATE(), :authorid)';
    $parameters = [':joketext' => $joketext, ':authorid' => $authorid];

    query($pdo, $query, $parameters);
}

function updateJoke($pdo, $jokeid, $joketext, $authorid){   
    $query = 'UPDATE `jokes` SET `authorid` = :authorid, `joketext` = :joketext WHERE `id` = :id';
    $parameters = [':id' => $jokeid, ':joketext' => $joketext, 'authorid' => $authorid];

    query($pdo, $query, $parameters);
}

function deleteJoke($pdo, $jokeid){
    $query = 'DELETE FROM `jokes` WHERE `id` = :id';
    $parameters = [':id' => $jokeid];
    
    query($pdo, $query, $parameters);
}
function query($pdo, $sql, $parameters = []){
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}