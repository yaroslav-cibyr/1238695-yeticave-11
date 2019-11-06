<?php
declare(strict_types=1);
date_default_timezone_set("Europe/Kiev");
setlocale(LC_ALL, "ru");

require_once "helpers.php";
require_once "functions.php";
$isAuth = rand(0, 1);
$userName = 'Ярослав';
$lots = [
    [
        "name" => "2014 Rossignol District Snowboard",
        "categories" => "Доски и лыжи",
        "price" => 10999,
        "img" => "img/lot-1.jpg",
        "expirationDate" => "2019-11-04",
    ],
    [
        "name" => "DC Ply Mens 2016/2017 Snowboard",
        "categories" => "Доски и лыжи",
        "price" => 159999,
        "img" => "img/lot-2.jpg",
        "expirationDate" => "2019-11-06",
    ],
    [
        "name" => "Крепления Union Contact Pro 2015 года размер L/XL",
        "categories" => "Крепления",
        "price" => 8000,
        "img" => "img/lot-3.jpg",
        "expirationDate" => "2019-11-02",
    ],
    [
        "name" => "Ботинки для сноуборда DC Mutiny Charocal",
        "categories" => "Ботинки",
        "price" => 10999,
        "img" => "img/lot-4.jpg",
        "expirationDate" => "2019-11-09",
    ],
    [
        "name" => "Куртка для сноуборда DC Mutiny Charocal",
        "categories" => "Одежда",
        "price" => 7500,
        "img" => "img/lot-5.jpg",
        "expirationDate" => "2019-11-10",
    ],
    [
        "name" => "Маска Oakley Canopy",
        "categories" => "Разное",
        "price" => 5400,
        "img" => "img/lot-6.jpg",
        "expirationDate" => "2019-11-11",
    ]
];
$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
$pageContent = include_template('main.php', [
    'categories' => $categories,
    'products' => $lots,
]);
$page = include_template('layout.php', [
    'categories' => $categories,
    'main' => $pageContent,
    'title' => 'Главная страница',
    'isAuth' => $isAuth,
    'userName' => $userName,
]);


print($page);


