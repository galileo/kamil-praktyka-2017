<?php
error_reporting(E_ALL);
ini_set('display_errors', true); // Errory w na stronie wskazują na daną linie i "opisują" problem

class Swiatlo 
{
    public function info($swiatla) // Funkcja info
    {
        if ('zielone' === $swiatla) {
            echo 'Zielone swiatlo, proszę jechać'; // Dla wartości zielone, wypisze sie "Zielone swiatlo, proszę jechać"
        } else if ('zolte' === $swiatla) {
            echo 'Zolte swiatlo, proszę zwolnic'; // Dla wartości zolte, wypisze sie "Zolte swiatlo, proszę zwolnic"
        } else if ('czerwone' === $swiatla) {
            echo 'Czerwone swiatlo, prosze się zatrzymać'; // Dla wartości czerwone, wypisze sie "Czerwone swiatlo, prosze się zatrzymać"
        } else {
            echo 'nie istnieje'; // Dla kazdego innego wpisanego tekstu wyświetli się "nie istnieje"
        }
        
    }
    
    public function tylkoCzerwone() // Druga funkcja "Tylko czerwone"
    {
        if ($this->swiatla === 'czerwone') { 
            echo "Czerwony jak cegla"; // Jeżeli przyjmie wartość czerwone to wypisze się "Czerwony jak cegła"
        }
    }
}
$swiatla = 'blekitne';
$swiatlo = new Swiatlo(); // Przypisanie wartosci zmiennej $swiatlo
$swiatlo->info($swiatla); // Wywołanie funkcji info
