<?php
$categories = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];
?>
<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и
            горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <?php foreach ($categories as $category): ?>
                <li class="promo__item promo__item--boards">
                    <a class="promo__link" href="pages/all-lots.html"><?= $category ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
            <?php

            $products = [
                [
                    "name" => "2014 Rossignol District Snowboard",
                    "categories" => "Доски и лыжи",
                    "price" => 10999,
                    "img" => "img/lot-1.jpg",
                ],
                [
                    "name" => "DC Ply Mens 2016/2017 Snowboard",
                    "categories" => "Доски и лыжи",
                    "price" => 159999,
                    "img" => "img/lot-2.jpg",
                ],
                [
                    "name" => "Крепления Union Contact Pro 2015 года размер L/XL",
                    "categories" => "Крепления",
                    "price" => 8000,
                    "img" => "img/lot-3.jpg",
                ],
                [
                    "name" => "Ботинки для сноуборда DC Mutiny Charocal",
                    "categories" => "Ботинки",
                    "price" => 10999,
                    "img" => "img/lot-4.jpg",
                ],
                [
                    "name" => "Куртка для сноуборда DC Mutiny Charocal",
                    "categories" => "Одежда",
                    "price" => 7500,
                    "img" => "img/lot-5.jpg",
                ],
                [
                    "name" => "Маска Oakley Canopy",
                    "categories" => "Разное",
                    "price" => 5400,
                    "img" => "img/lot-6.jpg",
                ]
            ];

            ?>
            <?php

            function formatPrice(int $price): string
            {
                $formatPrice = (string)$price;
                $price = ceil($price);
                if ($price >= 1000) {
                    $formatPrice = number_format($price, 0, ".", " ");
                }
                return $formatPrice . " ₽";
            }

            ?>
            <?php foreach ($products as $product): ?>
                <li class="lots__item lot">
                    <div class="lot__image">
                        <img src="<?php echo $product["img"] ?>" width="350" height="260" alt="">
                    </div>
                    <div class="lot__info">
                        <span class="lot__category"><?php echo $product["categories"] ?></span>
                        <h3 class="lot__title"><a class="text-link"
                                                  href="pages/lot.html"><?php echo $product["name"] ?></a></h3>
                        <div class="lot__state">
                            <div class="lot__rate">

                                    <span
                                        class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?php echo formatPrice($product["price"]) ?></span>

                            </div>
                            <div class="lot__timer timer">
                                12:23
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
