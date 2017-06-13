<?php
function getTitle($page){
  return $page->getTitle();
}

function getContent($page){
  return $page->getContent();
}

function getUrl($page){
  return $page->getUrl();
}

function url($page) {
  return '<a href="' . getUrl($page) . '">' . getTitle($page) . '</a>'; 
}

?>
