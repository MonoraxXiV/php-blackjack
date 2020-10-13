<?php
declare(strict_types=1);

class Player {

    private array $cards=[];
    private bool $lost= false;


    public function __construct(Deck $deck)
    {
        array_push($this->cards);
        $this->cards[]=$deck->drawCard();

    }

    public function hit(){
        return $this->cards;
    }
    public function surrender(){
    return $lost=true;
    }
    public function getScore(){

    }
    public function hasLost(){
        return $this->lost;
    }

}