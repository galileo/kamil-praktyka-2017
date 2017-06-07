<?php
include "Page.php";
$page = new Page('Mój tytuł zdefiniowany w klasie', 'Treść');

echo 'Treść strony: ' . $page->getContent() . '<br>';
echo 'Tytuł strony: ' . $page->getTitle() . '<br>';
$page->setContent('Treść o nas');
$page->setTitle('O nas');
echo 'Treść strony: ' . $page->getContent() . '<br>';
echo 'Tytuł strony: ' . $page->getTitle() . '<br>';
