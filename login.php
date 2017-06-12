<?php
  include "pages.php";
  
  $page = $pages['login'];
  
  ?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>praktyka1</title>
    <meta charset="utf-8">
    <meta name="keywords" content="slowa kluczowe" />
    <meta name="description" content="opis stroneczki" />
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
    <div class="glowa">
      <h1>Strona Kwiatowa</h1>
    </div>
    <div class="gora">
      <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><href="login.php">Login</a></li>
      </ul>
    </div>
    <div class="content">
      <div class="lewa">
        <div class="menu">
          <ul>
            <li><a href="index.php">Strona główna</a></li>
            <li><a href="AboutUs.php">O nas</a></li>
            <li><a href="galeria.php">Galeria Kwiatów</a></li>
            <li><a href="login.php">Zaloguj się</a></li>
            <li><a href="FormularzKontaktowy.php">Kontakt</a></li>
          </ul>
        </div>
      </div>
      <div class="prawa">
        <h1><?php echo $page->getTitle() ?></h1>
        <p><?php echo $page->getContent() ?></p>
        <div id="panel">
          <form>
            <label for="username">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username">
            <label for="password">Hasło:</label>
            <input type="password" id="password" name="password">
            <div id="lower">
              <input type="checkbox"><label class="check" for="checkbox">Zapamiętaj mnie!</label>
              <input type="submit" value="Login">
            </div>
          </form>
        </div>
      </div>
      <div class="clear" />
      </div>
    </div>
    <div class="stopeczka">
      Copyright by <a href="mailto:gacko2k9@interia.pl">gacko2k9</a> 2017
    </div>
  </body>
</html>
