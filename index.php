<?php
include "plik.php";
$page = new Page('Mój tytuł zdefiniowany w klasie', 'Treść');

echo 'Treść strony:' . $page->getContent() . '<br>';
echo 'Tytuł strony:' . $page->getTitle();
