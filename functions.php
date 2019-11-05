<?php
declare(strict_types=1);

function timeLeft(string $datetime): array
{
    date_default_timezone_set("Europe/Kiev");
    setlocale(LC_ALL, "ru");
    $nowDate = date_create("now");
    $endDate = date_create($datetime);
    if ($nowDate >= $endDate) {
        return ["00", "00"];
    }
    $interval = date_diff($nowDate, $endDate);
    $hours = date_interval_format($interval, '%H') + date_interval_format($interval, '%a') * 24;
    $hours = str_pad((string)$hours, 2, "0", STR_PAD_LEFT);
    $minutes = $interval->i;
    $minutes = str_pad((string)$minutes, 2, "0", STR_PAD_LEFT);
    $result = [$hours, $minutes];

    return $result;
}

function formatPrice(int $price): string
{
    $formatPrice = (string)$price;
    $price = ceil($price);
    if ($price >= 1000) {
        $formatPrice = number_format($price, 0, ".", " ");
    }
    return $formatPrice . " ₽";
}




