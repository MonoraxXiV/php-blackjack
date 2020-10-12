<?php
declare(strict_types=1);

require 'blackjack.php';
require 'Deck.php';
require 'player.php';

ini_set('display_errors', '1');

ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

session_start();




if (isset($blackjack)){
    $_SESSION['blackjackSes']=$blackjack;
}
//initializing all the game components?

    $blackjack= new Blackjack();
    $player= new Player();

//checking for posts
if (isset ($_POST['hit'])){
    echo "you hit";
}

if (isset ($_POST['stand'])){
    echo "you stand";
}

if (isset ($_POST['surrender'])){
 echo "dealer wins";
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
</head>
<body>
<form action="index.php" method="post" >
    <input type="button" name="hit" value="hit" onclick="<?php $player->hit(); ?>">
    <input type="button" name="stand" value="stand">
    <input type="button" name="surrender" value="surrender">

</form>
</body>
</html>
