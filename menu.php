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
    return '<li>' . urlMenu($pageName, $page) . '</li>';
}

function urlMenu($pageName, $page) {
  return '<a href="index.php?page=' . $pageName . '">' . $page->getTitle() . '</a>'; 
}


