<?php
error_reporting(E_ALL);
ini_set('display_errors', true);

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
