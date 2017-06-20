<?php
  include_once('pages.php');
  include_once "menu.php";
  include_once "funkcje.php";

  list($pageName, $page) = getPageFromPages($_GET, $pages);
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title><?php echo $page->getTitle() ?></title>
    <meta charset="utf-8">
    <meta name="keywords" content="slowa kluczowe" />
    <meta name="description" content="opis stroneczki" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css" />
  </head>
  <body>
  <div class="container">
    <div class="glowa">
      <h1>Strona Kwiatowa</h1>
    </div>
    <div class="gora">
      <ul class="breadcrumb">
        <li><?php echo urlMenu($pageName, $page->getTitle()) ?></li>
      </ul>
    </div>
    <div class="content">
      <div class="col-sm-3 lewa">
        <div class="menu">
        <?php echo menu1($pages) ?>
      </div>
      </div>
      <div class="col-sm-9 prawa">

        <h1><?php echo getTitle($page) ?></h1>
        <p><?php echo getContent($page) ?></p>
      </div>
      <div class="clear" />
      </div>
    </div>
    <div class="stopeczka">
      Copyright by <a href="mailto:gacko2k9@interia.pl">gacko2k9</a> 2017
    </div>
  </div>
  </body>
</html>
