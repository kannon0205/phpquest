<?php

require_once('enemy.php');

$slime1 = new Enemy('ぷちスライム', rand(20,50),rand(15,20),rand(1,5), rand(5, 15));
$slime2 = new Enemy('そこそこスライム', rand(50,75),rand(20,25),rand(10,15), rand(10, 20));
$slime3 = new Enemy('でかすぎスライム', rand(150,200),rand(40,60),rand(15,30), rand(200, 300));

//enemy

require_once('wepon.php');

$wepon1 = new Wepon('果物ナイフ', 3);
//初期装備

$wepon2 = new Wepon('マインゴーシュ',rand(5, 10));
$wepon3 = new Wepon('スティレット', rand(10, 15));
$wepon4 = new Wepon('でかすぎソード', rand(20, 40));
//wepon

require_once('armor.php');

$armor1 = new Armor('長袖シャツ', 1);
//初期装備

$armor2 = new Armor('厚手のシャツ', rand(1, 5));
$armor3 = new Armor('レザージャケット', rand(5, 10));
$armor4 = new Armor('でかすぎアーマー', rand(10, 25));
//armor

?>
