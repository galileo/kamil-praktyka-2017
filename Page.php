<?php
class Page
{
    private $title;
    private $content;
    private $tablica;
    
    function __construct($title, $content)
    {
        $this->title   = $title;
        $this->content = $content;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function setContent($value)
    {
        $this->content = $value;
    }
}
