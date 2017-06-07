<?php
include "Page.php";
$page = new Page('Mój tytuł zdefiniowany w klasie', 'Treść', '/');

echo 'Treść strony: ' . $page->getContent() . '<br>';
echo 'Tytuł strony: ' . $page->getTitle() . '<br>';
echo 'Adres url: ' . $page->getUrl() . '<br>';

$page->setContent('Treść o nas');
$page->setTitle('O nas');
$page->setUrl('/o-nas');

echo 'Treść strony: ' . $page->getContent() . '<br>';
echo 'Tytuł strony: ' . $page->getTitle() . '<br>';
echo 'Adres url: ' . $page->getUrl() . '<br>';
