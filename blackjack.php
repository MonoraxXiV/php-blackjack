<?php
declare(strict_types=1);
require 'player.php';
require 'Deck.php';

class Blackjack {
    private  $player;
    private  $dealer;
    private  $deck;



    public function getPlayer(){

    }
    public function getDealer(){

    }
    public function __construct($player, $dealer)
    {
        $this->player=$player;
        $this->dealer=$dealer;
        $deck=new Deck();
        $deck->shuffle();
    }

}

