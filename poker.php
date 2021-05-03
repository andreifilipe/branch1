<?php

$carta1 = [3, "copas"];
$carta2 = [5, "paus"];
$carta3 = [3, "ouro"];
$carta4 = [3, "copas"];
$carta5 = [5, "paus"];

$player1 = [$carta1, $carta2, $carta3, $carta4, $carta5];

if ($carta1[0] == $carta3[0] && $carta1[0] == $carta4[0] && $carta3[0] == $carta4[0] && $carta2[0] == $carta5[0]){
    echo 'Full House';
    echo '<br/>';
}



$cartas1 = [2,"ouro"];
$cartas2 = [8,"espadas"];
$cartas3 = [7,"copas"];
$cartas4 = [6, "paus"];
$cartas5 = [2,"copas"];

$player2 = [$cartas1, $cartas2, $cartas3, $cartas4, $cartas5];

if ($cartas1[0] == $cartas5[0]&& $cartas2[0] != $cartas3[0] && $cartas2[0] != $cartas4[0]&& $cartas3[0] != $cartas4[0]){
    echo 'Um Par';
    echo '<br/>';
}


$cart1 = [5, 'ouro'];
$cart2 = [5, 'espadas'];
$cart3 = [6, 'copas'];
$cart4 = [6, 'paus'];
$cart5 = [2, 'copas'];

$player3 = [$cart1, $cart2, $cart3, $cart4, $cart5];

if ($cart1[0] == $cart2[0] && $cart3[0] == $cart4[0] && $cart1[0] != $cart5[0] && $cart2[0] != $cart5[0] && $cart3[0] != $cart5[0] &&$cart4[0] != $cart5[0]){
    echo 'Dois Pares';
    echo '<br/>';
}

$mao1 = [2, 'copas'];
$mao2 = [2, 'paus'];
$mao3 = [2, 'ouro'];
$mao4 = [4, 'ouro'];
$mao5 = [4, 'espadas'];

$player4 = [$mao1, $mao2, $mao3, $mao4, $mao5];

if ($mao1[0] == $mao2[0] && $mao2[0] == $mao3[0] && $mao1[0] == $mao3[0] && $mao4[0] == $mao5[0]){
    echo ' Trinca';
    echo '<br/>';
}

$push1 = [2,'copas'];
$push2 = [3,'copas'];
$push3 = [4,'ouro'];
$push4 = [5,'paus'];
$push5 = [6,'espadas'];

$player5 = [$push1, $push2, $push3, $push4, $push5];

if ($push1[0] < $push2[0] && $push2[0] < $push3[0] && $push3[0] < $push4[0] && $push4[0] < $push5[0]){
    echo 'Straight';
    echo '<br/>';
}

$play1 = [3,"copas"];
$play2 = [5,"copas"];
$play3 = [9,"copas"];
$play4 = [6,"copas"];
$play5 = [2,"copas"];

$player6 = [$play1, $play2, $play3, $play4, $play5];

if($play1[1] == $play2[1] && $play2[1] == $play3[1] && $play3[1] == $play4[1] && $play4[1] == $play5[1]){
    echo 'Flush';
    echo '<br/>';
}

$jogada1 = [5,'copas'];
$jogada2 = [5,'espadas'];
$jogada3 = [5,'ouro'];
$jogada4 = [5,'espadas'];
$jogada5 = [8,'copas'];

$player7 = [$jogada1,$jogada2,$jogada3,$jogada4,$jogada5];

if($jogada1[0] == $jogada2[0] && $jogada2[0] == $jogada3[0] && $jogada3[0] == $jogada4[0] && $jogada1[0] != $jogada5[0] && $jogada2[0] != $jogada5[0] && $jogada3[0] != $jogada5[0] && $jogada4[0] != $jogada5[0]){
    echo 'Quadra';
    echo '<br/>';
}

$jog1 = [2,"ouro"];
$jog2 = [3,"ouro"];
$jog3 = [4,"ouro"];
$jog4 = [5,"ouro"];
$jog5 = [6,"ouro"];


$player8 = [$jog1, $jog2, $jog3, $jog4, $jog5];


if($jog1[0] < $jog2[0] && $jog1[1] == $jog2[1] && $jog2[0] < $jog3[0] && $jog2[1] == $jog3[1] && $jog3[0] < $jog4[0] && $jog3[1] == $jog4[1] && $jog4[0] < $jog5[0] && $jog4[1] == $jog5[1] ){
    echo 'Straight Flush';
    echo '<br/>';
}


$hand1 = [10,"copas"];
$hand2 = [11,"copas"];
$hand3 = [12,"copas"];
$hand4 = [13,"copas"];
$hand5 = [14,"copas"];


$player9 = [$hand1, $hand2, $hand3, $hand4, $hand5];

if ($hand1[0] < $hand2[0] && $hand1[1] == $hand2[1] && $hand2[0] < $hand3[0] && $hand2[1] == $hand3[1] && $hand3[0] < $hand4[0] && $hand3[1] == $hand4[1] && $hand4[0] < $hand5[0] && $hand4[1] == $hand5[1] ){
    echo 'Straight Flush';
    echo '<br/>';
}

?>