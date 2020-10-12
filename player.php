<?php
declare(strict_types=1);

require 'blackjack.php';
require 'Deck.php';
class Player {

    private array $cards=[];
    private bool $lost= false;


    public function __construct($deck)
    {
        //getDeck()?
        $deck->drawCard(2);
    }

    public function hit(){

    }
    public function surrender(){

    }
    public function getScore(){

    }
    public function hasLost(){

    }

}