<?php
  include_once "pages.php";
  include_once "menu.php";
  include_once "funkcje.php";
  
  $page = $pages['galerry'];
  
  ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title><?php echo $page->getTitle() ?></title>
    <meta charset="utf-8">
    <meta name="keywords" content="slowa kluczowe" />
    <meta name="description" content="opis stroneczki" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <div class="glowa">
      <h1>Galeria</h1>
    </div>
    <div class="gora">
      <ul class="breadcrumb">
        <li><?php echo url($pages['index']) ?></li>
        <li><?php echo url($page) ?></li>
      </ul>
    </div>
    <div class="content">
      <div class="lewa">
        <div class="menu">
          <ul>
          <?php echo menu1($pages) ?>
        </div>
      </div>
      <div class="prawa">
        <h1><?php echo getTitle($page) ?></h1>
        <p><?php echo getContent($page) ?></p>
        <a href="Roza.php"><img src="img\Roza.jpg" alt="Róża" height="300" width="300" /></a>
        <a href="chaber.php"><img src="img\chaber.jpg" alt="chaber" height="300" width="300" /></a>
        <a href="mak.php"><img src="img\mak.jpg" alt="mak" height="300" width="300" /></a>
        <a href="stokrotka.php"><img src="img\stokrotka.jpg" alt="stokrotka" height="300" width="300" /></a>
        <a href="irys.php"><img src="img\irys.jpg" alt="irys" height="300" width="300" /></a>
        <a href="tulipan.php"><img src="img\tulipan.jpg" alt="tulipan" height="300" width="300" /></a>
        </form>
      </div>
      <div class="clear" />
      </div>
    </div>
    <div class="stopeczka">
      Copyright by <a href="mailto:gacko2k9@interia.pl">gacko2k9</a> 2017
    </div>
  </body>
</html>
