<?php

function include_template($name, array $data = [])
{
    $name = 'templates/' . $name;
    $result = '';

    if (!is_readable($name)) {
        return $result;
    }

    ob_start();
    extract($data);
    require $name;

    $result = ob_get_clean();

    return $result;
}


$pageContent = include_template('main.php',);
$page = include_template('layout.php', [
    'main' => $pageContent,
    'title' => 'Главная страница',
]);


print($page);


