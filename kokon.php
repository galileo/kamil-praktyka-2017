<?php
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
