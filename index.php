<?php

require('SuperHero.php'); //подключение файлов с классами
require('SuperPuperHero.php');

$hero1 = new SuperHero();
$hero1->setName('Арнольд');
$hero1->setАbility('Скыдыщъ');
$hero1->generateDamage();

$hero2 = new SuperPuperHero();
$hero2->setName('Бадабум');
$hero2->setSuperAbility('Бум-бум');
$hero2->superDamage();

echo "Всем привет! Меня зовут ", $hero1->getName() . '.<br>',
"Моя способность: ", $hero1->getАbility(),
" наносит урона: ", $hero1->getDamage() . '.<br>';
echo '<br>';

echo "Моё имя ", $hero2->getName() . '.<br>',
"Суперспособность: ", $hero2->getSuperAbility(),
" наносит ", $hero2->getDamage() . ' урона.<br>';
echo '<br>';

echo "В правом углу ринга СУПЕР ГЕРОЙ ", $hero1->getName() . '.<br>',
"В левом углу СУПЕРПУПЕР ГЕРОЙ ", $hero2->getName() . '.<br><br>',
"БОЙ НАЧИНАЕТСЯ. Гонг!!!", '<br>';

if ($hero2->getDamage() >= $hero1->getDamage()) {
    echo "Благодаря супер силе в ", $hero2->getDamage(), " единиц победил ", $hero2->getName();
} else {
    echo "Суперсила ", $hero2->getName(), " не спасла его от поражения. Победил ", $hero1->getName();
};