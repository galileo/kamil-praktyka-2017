<?php

class Lotto {

    private $ballCount;
    private $takenBallCount;

    function __construct($ballCount, $takenBallCount)
    {
        $this->ballCount = $ballCount;
        $this->takenBallCount = $takenBallCount;
    }

    function random () {
        $randomNumbers = [];
        
        for ($i = 0; $i < $this->takenBallCount; $i++) {
            $randomNumbers[] = rand(1, $this->ballCount);
        }

        return $randomNumbers;
    }

    function printRandom() {
        for ($i = 0; $i < $this->takenBallCount; $i++) {
            echo rand(1, $this->ballCount) . "\n";
        }
    }

    function randomAsString() {
        $string = '';

        foreach ($this->random() as $random) {
            $string .= $random . ', ';
        }
        return $string;
    }
}
$bigLotek = new Lotto(49, 6);
$bigLotek->randomAs

$multi = new Lotto(50, 5);
$wyniki = $multi->random();
$multi->printRandom();

echo '<hr>';

$wynik = '';

        foreach($wyniki as $element){
            $wynik .= $element . ', ';
        }
        echo $wynik;

echo '<hr>';

echo $multi->printRandom();

