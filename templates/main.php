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
            <?php foreach ($lots as $product): ?>
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
                                <span class="lot__amount">Стартовая цена</span>
                                <span class="lot__cost"><?php echo formatPrice($product["price"]) ?></span>
                            </div>
                            <?php
                            $timeLeft = timeLeft($product["expirationDate"]);
                            $timerFinishing = $timeLeft[0] < 1 ? "timer--finishing" : "";
                            ?>
                            <div class="lot__timer timer <?php echo $timerFinishing; ?>">
                                <?php echo $timeLeft[0] . ":" . $timeLeft[1]; ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
