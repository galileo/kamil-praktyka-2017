<?php

?>

<?php
class Kostka{
    private $iloscScianek6;
    private $iloscScianek8;
    private $iloscScianek12;

    function __construct($iloscScianek6, $iloscScianek8, $iloscScianek12){
      $this->iloscScianek6 = $iloscScianek6;
      $this->iloscScianek8 = $iloscScianek8;
      $this->iloscScianek12 = $iloscScianek12;

    }
    function rzutKoscia6()
    {
        return rand(1,$this->iloscScianek6);
    }
        function rzutKoscia8()
    {
        return rand(1,$this->iloscScianek8);
    }
        function rzutKoscia12()
    {
        return rand(1,$this->iloscScianek12);
    }
        function rzutKoscia()
    {
        echo rand(1,$this->iloscScianek6);

        return 'dupazbita';
    }
}

$kostka = new Kostka(6, 8, 12);
echo 'Twoja wyrzucona liczba dla kości z dwunastoma ścianami to: ' .$kostka->rzutKoscia12();
echo '<hr>';
echo 'Twoja wyrzucona liczba dla kości z ośmioma ścianami to: ' .$kostka->rzutKoscia8();
echo '<hr>';
echo 'Twoja wyrzucona liczba to: kości z sześcioma ścianami to:' .$kostka->rzutKoscia6();
echo '<hr>';
$kostka->rzutKoscia();
