<?php
  include_once('pages.php');
  include_once "menu.php";
  include_once "funkcje.php";

  if (isset($_GET['page']) && $_GET['page'] !== null){
    $page = $pages[$_GET['page']];
  } else {
    $page = $pages['index'];
  }

  if ($page == null) {
    echo "Nie ma takiej strony";
  }
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
      <h1>Strona Kwiatowa</h1>
    </div>
    <div class="gora">
      <ul class="breadcrumb">
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

        <h1><?php echo getTitle($page) ?></h1>
        <p><?php echo getContent($page) ?></p>
      </div>
      <div class="clear" />
      </div>
    </div>
    <div class="stopeczka">
      Copyright by <a href="mailto:gacko2k9@interia.pl">gacko2k9</a> 2017
    </div>
  </body>
</html>
