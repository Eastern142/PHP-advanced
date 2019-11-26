<?php
/** @var app\models\Goods $goods - экземпляр класса Goods */
?>

<div>
    <h2><?= $goods_card->name ?></h2>
    <img src="/img/catalog_img/<?= $goods_card->image ?>" alt="#" width="300px">
    <h3>Описание:</h3>
    <p><?= $goods_card->description ?></p>
    <p>Цена: <?= $goods_card->price; ?> $</p>
    <button data-id="<?= $goods_card->id ?>" class="buy">Купить</button>
</div>