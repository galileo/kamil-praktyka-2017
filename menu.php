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

function menu1($pages){
    $body = '';

    $head = '<div class="menu">
        <ul>';
        $head .= '<li><a href="?page=index">Storna głowna</a></li>';
        $head .= '<li><a href="?page=galerry">Galeria</a></li>';
        $head .= '<li><a href="?page=register">Register</a></li>';
          
foreach($pages as $key => $page) {
    $body .= menuRow($page);
}

    $bottom = '
        </ul>
    </div>';

    return $head . $body . $bottom;
}

function menuRow($page) {
    return '<li>' . url($page) . '</li>';
}

