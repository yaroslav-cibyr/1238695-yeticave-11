<?php

require_once "helpers.php";


$pageContent = include_template('main.php');
$page = include_template('layout.php', [
    'main' => $pageContent,
    'title' => 'Главная страница',
]);


print($page);


