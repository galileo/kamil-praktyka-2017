<?php
  include_once "menu.php";
  include_once "pages.php";
  include_once "funkcje.php";

  $page = $pages['form'];

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
      <h1>O Nas</h1>
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
        <?php echo menu1($pages) ?>
      </div>
    </div>
    <div class="prawa">
        <h1><?php echo $page->getTitle() ?></h1>
        <p><?php echo $page->getContent() ?></p>
        <form id="contact-form" action="contact" method="post">
          <strong>Twoja Nazwa</strong> <span>* </span>
          <input type="text" name="name" /><br>
          <strong>Twój E-Mail</strong> <span>*</span>
          <input type="text" name="name" /><br>
          <strong>Temat</strong>
          <input type="text" name="name" /><br>
          <strong>Wiadomość</strong> <span>*</span>
          <textarea></textarea><br>
          <button>Wyślij!</button>
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