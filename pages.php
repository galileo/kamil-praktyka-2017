<?php
include_once "page.php";
include_once('menu.php');
$pages = [
  'nowa' => new Page('nowa', 'nowa', 'nowa'),
  'index' => new Page('Strona', 'Strona w budowie...', 'index.php'),
  'aboutUs' => new Page('AboutUs', 'Wraz z upływem czasu Strona-Kwiatowa.pl nabierała doświadczenia w produkcji,
   innowacyjności, tworząc nowy design własnych produktów tak, aby nasi klienci otrzymując do rąk produkt
  wyróżniający nas na rynku otrzymał także najwyższej jakości usługę.', 'aboutUS.php'),
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
  'gallery_mak' => new Page('Mak', '<div class="galeria">
      <img src="img\mak.jpg" alt="mak" height="500" width="500" />
      <div class="opisykwiatow">
        rodzaj roślin z rodziny makowatych (Papaveraceae Juss.), roślina oleista, rodzimy dla Eurazji, Afryki i Ameryki Północnej.
        Zalicza się do niego w zależności od ujęcia od ok. 70 do ok. 100 gatunków[3][4]. Niemal wszystkie gatunki występują na<
        półkuli północnej, w Australii i Afryce południowej rośnie dziko tylko jeden gatunek – Papaver acuelatum. Wiele gatunków<
        uprawianych jest jako rośliny ozdobne. Mak lekarski (Papaver somniferum) jest surowcem, z którego wytwarzana jest heroina,
        morfina i opium
      </div>
      <div class="clear" />
      </div>
    </div>', 'nowa'),

];

function getSubItems($type, $pages) {
      $subitems = [];
      foreach ($pages as $pageName => $page) {
            if (!preg_match('/_/', $pageName)) {
                  continue;
            }
            $elements = explode('_', $pageName);

            if ($type == $elements[0]) {
                  $subitems[$pageName] = $page;
            }
      } 

      return $subitems;
}

$kfiotki = getSubItems('gallery', $pages);
$pages['gallery'] = new Page('Galerry', menu1($kfiotki, '-'), 'galeria.php');
  
function page_not_found() {
    echo require('error.php');
    die();
  }

function getPageFromPages($urlParams, $pages) {
  $isPageSpecfied = isset($urlParams['page']) && $urlParams['page'] !== null;
  $pageName = 'index';

  if ($isPageSpecfied) {
    $pageName = $urlParams['page'];
  } 

  $existingPage = isset($pages[$pageName]);

  if ($existingPage) {
    $page = $pages[$pageName];
  }

  if (!$page) {
    $page = new Page('Error', '404', '');
  }
  
  return [$pageName, $page];
}