<?php
  include "pages.php";
  
  $page = $pages['galerry'];
  
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
      <h1>nagłówek</h1>
    </div>
    <div class="gora">
      <ul class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="galeria.php">Galerry</a></li>
        <li><href="chaber.php">Chaber</li>
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
    <div class="galeria">
      <img src="img\chaber.jpg" alt="Róża" height="500" width="500" />
      <div class="opisykwiatow">
        gatunek rośliny zielnej z rodziny astrowatych. Nazwy ludowe: białasy, głowacz, jasieniec, kardy, kwiatek wołoszek, macoszka,
        modrak, modrzeńczyk, samosiejka, wasilek, wawer. Występuje w Europie oraz na Syberii Zachodniej. W Polsce pospolity chwast<
        polny, archeofitczasem podaje się nawet dwukrotnie większą liczbę, co wynika z różnego traktowania taksonów. Większość 
        ozdobnych odmian
      </div>
      <div class="clear" />
      </div>
    </div>
    <div class="stopeczka">
      Copyright by <a href="mailto:gacko2k9@interia.pl">gacko2k9</a> 2017
    </div>
  </body>
</html>
