<?php
include_once "page.php";
include_once('menu.php');
$pages = [
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
      <img src="img\mak.jpg" alt="mak" height="300" width="300" />
      <div class="opisykwiatow">
        rodzaj roślin z rodziny makowatych (Papaveraceae Juss.), roślina oleista, rodzimy dla Eurazji, Afryki i Ameryki Północnej.
        Zalicza się do niego w zależności od ujęcia od ok. 70 do ok. 100 gatunków[3][4]. Niemal wszystkie gatunki występują na<
        półkuli północnej, w Australii i Afryce południowej rośnie dziko tylko jeden gatunek – Papaver acuelatum. Wiele gatunków<
        uprawianych jest jako rośliny ozdobne. Mak lekarski (Papaver somniferum) jest surowcem, z którego wytwarzana jest heroina,
        morfina i opium
      </div>
      <div class="clear" />
      </div>
    </div>', '"<img src="img\mak.jpg" alt="Mak" height="300" width="300" />"'),
      'gallery_roza' => new Page('Roza', '<div class="galeria">
      <img src="img\roza.jpg" alt="Roza" height="500" width="500" />
      <div class="opisykwiatow">
         rodzaj krzewów należących do rodziny różowatych (Rosaceae). Znanych jest 150–200 gatunków występujących na
         półkuli północnej, czasem podaje się nawet dwukrotnie większą liczbę, co wynika z różnego traktowania taksonów.
         Większość ozdobnych odmian róży rozmnaża się przez okulizację na podkładkach z dzikich róż.
      </div>
      <div class="clear" />
      </div>
    </div>', '"<img src="img\Roza.jpg" alt="Róża" height="300" width="300" />"'),
      'gallery_chaber' => new Page('Chaber', '<div class="galeria">
      <img src="img\chaber.jpg" alt="chaber" height="500" width="500" />
      <div class="opisykwiatow">
        rodzaj roślin z rodziny astrowatych (Asteraceae Dum.), liczący 450-550 gatunków, rosnących głównie w Europie
        i na obszarze śródziemnomorskim, kilka gatunków pochodzi z Azji, Australii i Ameryki Północnej. Nazwa
        rodzaju pochodzi od Hipokratesa, który twierdził, że roślinę (Centaurea cyanus) wskazał Grekom centaur Chiron,
        wychowawca wielu herosów mitologii greckiej.
      </div>
      <div class="clear" />
      </div>
    </div>', '"<img src="img\chaber.jpg" alt="Chaber" height="300" width="300" />"'),
      'gallery_tulipan' => new Page('Tulipan', '<div class="galeria">
      <img src="img\tulipan.jpg" alt="tulipan" height="500" width="500" />
      <div class="opisykwiatow">
        rodzaj roślin cebulowych należący do rodziny liliowatych. Zalicza się do niego ok. 120 gatunków i co najmniej 15 tysięcy
        kultywarów (odmian uprawnych). Gatunkiem typowym jest Tulipa sylvestris L.. Naturalny obszar występowania tulipana
        to Europa Południowa, północna Afryka, Azja od Turcji, przez Iran, góry Pamir i Hindukusz, stepy Kazachstanu, po
        północno-wschodnie Chiny i Japonię.
      </div>
      <div class="clear" />
      </div>
    </div>', '"<img src="img\tulipan.jpg" alt="Tulipan" height="300" width="300" />"'),
      'gallery_stokrotka' => new Page('Stokrotka', '<div class="galeria">
      <img src="img\stokrotka.jpg" alt="stokrotka" height="500" width="500" />
      <div class="opisykwiatow">
        liczący 15 gatunków rodzaj z rodziny astrowatych. Pochodzą z Europy, Afryki Północnej i Turcji. We
        florze Polski występuje tylko jeden gatunek. Gatunkiem typowym jest Bellis perennis L.
      </div>
      <div class="clear" />
      </div>
    </div>', '"<img src="img\stokrotka.jpg" alt="Stokrotka" height="300" width="300" />"'),
      'gallery_irys' => new Page('Irys', '<div class="galeria">
      <img src="img\irys.jpg" alt="irys" height="500" width="500" />
      <div class="opisykwiatow">
        rodzaj roślin należący do rodziny kosaćcowatych. Kosaćce występują w stanie dzikim na półkuli północnej
        i jest ich ponad 200 gatunków. Gatunkiem typowym jest kosaciec bródkowy (Iris germanica L.).
      </div>
      <div class="clear" />
      </div>
    </div>', '"<img src="img\irys.jpg" alt="Irys" height="300" width="300" />"'),

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
$pages['gallery'] = new Page('Galerry', menuGaleria($kfiotki, '-'), 'galeria.php');
  
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
