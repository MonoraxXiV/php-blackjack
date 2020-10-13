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




if (!isset($_SESSION['blackjackSes'])) {
    $_SESSION['blackjackSes'] = new Blackjack();
}
    $game=$_SESSION['blackjackSes'];

$player=$game->getPlayer();
$dealer=$game->getDealer();
$deck=$game->getDeck();
//initializing all the game components?




//argument problem, missing $deck in parameters


//checking for posts
if (!isset ($_POST['action'])){
    echo "the game begins";
    var_dump($player);
}elseif ( ($_POST['action'])==='hit'){
        $player->hit($deck);
        //currently shows the value of the first card only

        var_dump($player);
        echo "your points: ".$player->getScore()."</br>";
        if($player->hasLost()===true){
            echo "you lost";
            session_unset();
        }

}elseif ($_POST['action']==='stand'){
    // if ($dealer1->getScore()<15 {
    //var_dump($dealer->hit($deck));
    //}
}elseif ( $_POST['action']==='surrender'){
    $player->surrender();
    echo "player has surrendered, dealer wins";
    if($player->hasLost()===true){
        session_unset();
    }
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
    <input type="submit" name="action" value="hit" >
    <input type="submit" name="action" value="stand">
    <input type="submit" name="action" value="surrender">

</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
