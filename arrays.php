<?php
include "page.php";
$table = [new Page('Strona Główna', '',''),new Page('Formularz', '',''),new Page('Onas','',''),];
$tableLength = count($table);

$onas = $table[2];
$formularz = $table[1];
$page = $table[0];
echo $page->getTitle();
echo $formularz->getTitle();
echo $onas->getTitle();

for ($i = 0; $i < $tableLength; $i++) {
  echo $table[$i]->getTitle() . ', ';
}

foreach($table as $word) {
    echo $word->getTitle() . ', ';
}

$page = new Page('strona glowna', 'Treść', '/');
