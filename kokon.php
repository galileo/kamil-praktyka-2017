<?php
error_reporting(E_ALL);
ini_set('display_errors', true); // Errory w na stronie wskazują na daną linie i "opisują" problem

function swiatla ($swiatla) {
    if ($swiatla === 'zielone'){
        echo 'Zielone swiatlo, proszę jechać';
    } else if ($swiatla === 'zolte'){
        echo 'Zolte swiatlo, proszę się zatrzymać';
    } else if ($swiatla === 'czerwone'){
        echo 'Czerwone swiatlo, proszę się zatrzymać';
    } else {
        echo 'Nie ma takich świateł';
    }
}

$swiatloZielone = 'zielone';
$swiatloZolte = 'zolte';
$swiatloCzerwone = 'czerwone';

swiatla($swiatloZielone);
//swiatla($swiatloZolte);
//swiatla($swiatloCzerwone);
//swiatla('Nie ma takich świateł');
