<?php
declare(strict_types=1);

require 'blackjack.php';
require 'Deck.php';
require 'player.php';
require 'Suit.php';
require 'Card.php';

ini_set('display_errors', '1');

ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();




if (!isset($blackjack)) {
    $_SESSION['blackjackSes'] = new Blackjack();
}
$player=$_SESSION['blackjackSes']->getPlayer();
$dealer=$_SESSION['blackjackSes']->getDealer();
$deck=$_SESSION['blackjackSes']->getDeck();
//initializing all the game components?

    $blackjack= new Blackjack();


//argument problem, missing $deck in parameters


//checking for posts
if (!isset ($_POST['hit'])&& (!isset($_POST['stand']))&&(!isset ($_POST['surrender']))){
    echo "the game begins";
}elseif (isset ($_POST['hit'])){
    var_dump($player->hit($deck));
}elseif (isset ($_POST['stand'])){
    // if ($dealer1->getScore()<15 {
    var_dump($dealer->hit($deck));
    //}
}elseif (isset ($_POST['surrender'])){
    $player->surrender();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blackjack</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<form action="index.php" method="post" >
    <input type="submit" name="hit" value="hit" >
    <input type="submit" name="stand" value="stand">
    <input type="submit" name="surrender" value="surrender">

</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
