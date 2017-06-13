<?php
include_once "page.php";
$pages = [
  'index' => new Page('Strona', 'Strona w budowie...', 'index.php'),
  'aboutUs' => new Page('AboutUs', 'Wraz z upływem czasu Strona-Kwiatowa.pl nabierała doświadczenia w produkcji,
   innowacyjności, tworząc nowy design własnych produktów tak, aby nasi klienci otrzymując do rąk produkt
  wyróżniający nas na rynku otrzymał także najwyższej jakości usługę.', 'aboutUS.php'),
  'galerry' => new Page('Galerry', ' ', 'galeria.php'),
  'login' => new Page('Log In', 'Nie podawaj nikomu swojego hasła ', 'login.php'),
  'form' => new Page('Contact Us', ' ', 'FormularzKontaktowy.php'),
  'register' => new Page('Register', ' ', 'Register.php')
];
