<?php
$swiatla = 'zolte';

switch ($swiatla) {
    case 'zielone':
        echo 'Swiatlo zielone, proszę jechać';
        break;
    case 'zolte':
        echo 'Zolte swiatlo, proszę zwolnic';
        break;
    case 'czerwone':
        echo 'Czerwone swiatlo, prosze się zatrzymać';
        break;
    default:
        echo 'nie istnieje';
}
