<?php
include_once "page.php";
$pages = [
  'index' => new Page('Strona', 'Strona w budowie...', 'index.php'),
  'aboutUs' => new Page('AboutUs', 'Wraz z upływem czasu Strona-Kwiatowa.pl nabierała doświadczenia w produkcji,
   innowacyjności, tworząc nowy design własnych produktów tak, aby nasi klienci otrzymując do rąk produkt
  wyróżniający nas na rynku otrzymał także najwyższej jakości usługę.', 'aboutUS.php'),
  'galerry' => new Page('Galerry', '<a href="Roza.php"><img src="img\Roza.jpg" alt="Róża" height="300" width="300" /></a>
        <a href="chaber.php"><img src="img\chaber.jpg" alt="chaber" height="300" width="300" /></a>
        <a href="mak.php"><img src="img\mak.jpg" alt="mak" height="300" width="300" /></a>
        <a href="stokrotka.php"><img src="img\stokrotka.jpg" alt="stokrotka" height="300" width="300" /></a>
        <a href="irys.php"><img src="img\irys.jpg" alt="irys" height="300" width="300" /></a>
        <a href="tulipan.php"><img src="img\tulipan.jpg" alt="tulipan" height="300" width="300" /></a>',
        'galeria.php'),
  'login' => new Page('Log In', 'Nie podawaj nikomu swojego hasła
          <div id="panel">
            <form>
              <label for="username">Nazwa użytkownika:</label>
              <input type="text" id="username" name="username">
              <label for="password">Hasło:</label>
              <input type="password" id="password" name="password">
              <div id="lower">
              <input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
              <input type="submit" value="Login">
            </form>
          </div>
        </div>', 'login.php'),
  'form' => new Page('Contact Us', '<form id="contact-form" action="contact" method="post">
          <strong>Twoja Nazwa</strong> <span>* </span>
          <input type="text" name="name" /><br>
          <strong>Twój E-Mail</strong> <span>*</span>
          <input type="text" name="name" /><br>
          <strong>Temat</strong>
          <input type="text" name="name" /><br>
          <strong>Wiadomość</strong> <span>*</span>
          <textarea></textarea><br>
          <button>Wyślij!</button>
        </form>', 'FormularzKontaktowy.php'),
  'register' => new Page('Register', '<div id="panel">
          <form>
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username">
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email">
            <input type="submit" value="Rejestruj">
      </div>', 'Register.php'),
];
