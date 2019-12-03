<?php
    ob_start();
    include __DIR__.'/../templates/home.html.php';
    $view = ob_get_clean();
    $title = 'Internet Joke Database';
    include __DIR__.'/../templates/layout.html.php';
