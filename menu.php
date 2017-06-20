<?php
function menu($pages)
{
     return '<div class="menu">
        <ul>
          <li><a href="' . $pages['index']->getUrl() . '">' . getTitle($pages['index']) . ' </a></li>
          <li><a href="' . $pages['aboutUs']->getUrl() . '">' . $pages['aboutUs']->getTitle() . '</a></li>
          <li><a href="' . $pages['galerry']->getUrl() . '">' . getTitle($pages['galerry']) . '</a></li>
          <li><a href="' . $pages['login']->getUrl() . '">' . $pages['login']->getTitle() . '</a></li>
          <li><a href="' . $pages['form']->getUrl() . '">' . getTitle($pages['form']) . '</a></li>
        </ul>
    </div>';
    
}

function menu1($pages, $splitter = '_'){
    $body = '';

    $head = '<div class="menu">
        <ul>';          
foreach($pages as $pageName => $page) {
    if (preg_match('/'.$splitter.'/', $pageName)) {
        continue;
    }
    $body .= menuRow($pageName, $page);
}

    $bottom = '
        </ul>
    </div>';

    return $head . $body . $bottom;
}

function menuRow($pageName, $page) {
    return '<li>' . urlMenu($pageName, $page->getTitle()) . '</li>';
}

function urlMenu($pageName, $linkName) {
  return '<a href="index.php?page=' . $pageName . '">' . $linkName . '</a>'; 
}

function menuGaleria($pages, $splitter = '_'){
    $body = '';
/*
 <a href="Roza.php"><img src="img\Roza.jpg" alt="Róża" height="300" width="300" /></a>
        <a href="chaber.php"><img src="img\chaber.jpg" alt="chaber" height="300" width="300" /></a>
        <a href="mak.php"><img src="img\mak.jpg" alt="mak" height="300" width="300" /></a>
        <a href="stokrotka.php"><img src="img\stokrotka.jpg" alt="stokrotka" height="300" width="300" /></a>
        <a href="irys.php"><img src="img\irys.jpg" alt="irys" height="300" width="300" /></a>
        <a href="tulipan.php"><img src="img\tulipan.jpg" alt="tulipan" height="300" width="300" /></a>
        */
    $head = '';          
foreach($pages as $pageName => $page) {
    if (preg_match('/'.$splitter.'/', $pageName)) {
        continue;
    }
    $body .= urlMenu($pageName, $page->getUrl());
}

    $bottom = '';

    return $head . $body . $bottom;
}

