<?php
declare(strict_types=1);

class Blackjack {
    private  $player;
    private  $dealer;
    private  $deck;



    public function getPlayer(){
    return $this->player;
    }

    /**
     * @param Player $player
     */
    public function setPlayer(Player $player): void
    {
        $this->player = $player;
    }


    public function getDealer(){
    return $this->dealer;
    }
    public function __construct()
    {

        // old attempt at Instantiate
        //$this->player=$player;
        //$this->dealer=$dealer;
       $this->deck=new Deck();
        $this->deck->shuffle();
        $this->player= new Player($this->deck);
        $this->dealer= new Player($this->deck);

    }
    public function getDeck(){
        return $this->deck;
    }

}

