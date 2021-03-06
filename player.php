<?php
declare(strict_types=1);

class Player
{

    private array $cards = [];
    private bool $lost = false;


    public function __construct(Deck $deck)
    {
        $this->cards=[];
            array_push($this->cards,$deck->drawCard(),$deck->drawCard());

    }

    public function hit( $deck)
    {

       array_push($this->cards,$deck->drawCard());


    }

    public function surrender()
    {
        return $this->lost = true;

    }

    public function getScore()
    { $score=0;
    foreach ($this->cards AS $card){

       $score+=$card->getValue();



    }

    if ($score >21){
        $this->lost=true;

    }

        return $score;
    }

    public function hasLost()
    {
          return $this->lost;


    }

    /**
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }
}

class Dealer extends Player{
    public function hit($deck)
    {
        while($this->getScore() < 15) {
            parent::hit($deck); // TODO: Change the autogenerated stub
        }
    }
}