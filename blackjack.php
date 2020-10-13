<?php
declare(strict_types=1);

class Blackjack {
    private  $player;
    private  $dealer;
    private  $deck;



    public function getPlayer(){
    return $this->player;
    }
    public function getDealer(){
    return $this->dealer;
    }
    public function __construct()
    {

        // old attempt at Instantiate
        //$this->player=$player;
        //$this->dealer=$dealer;
        $deck=new Deck();
        $deck->shuffle();
        $this->player= new Player($deck);
        $this->dealer= new Player($deck);

    }

}

