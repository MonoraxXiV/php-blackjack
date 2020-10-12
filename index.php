<?php
declare(strict_types=1);
session_start();
$_SESSION['blackjackSes']=Blackjack::class;
require 'blackjack.php';
require 'Deck.php';
require 'player.php';



?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blackjack</title>
</head>
<body>
<form>
    <button type="button" name="hit">hit</button>
    <button type="button" name="stand">stand</button>
    <button type="button" name="surrender">surrender</button>
</form>
</body>
</html>
