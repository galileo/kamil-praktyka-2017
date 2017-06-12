<?php
include "page.php";
$pages = [
  'index' => new Page('Strona Główna', 'Strona w budowie...', '/'),
  'aboutUs' => new Page('O nas', 'Wraz z upływem czasu Strona-Kwiatowa.pl nabierała doświadczenia w produkcji,
   innowacyjności, tworząc nowy design własnych produktów tak, aby nasi klienci otrzymując do rąk produkt
  wyróżniający nas na rynku otrzymał także najwyższej jakości usługę.', '/'),
  'galeria' => new Page('Galeria', ' ', '/'),
  'login' => new Page('Zaloguj się !', 'Nie podawaj nikomu swojego hasła ', '/'),
  'formularz' => new Page('Skontaktuj się z nami', ' ', '/')
];

