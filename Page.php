<?php
class Page
{
    private $title;
    private $content;
    
    function __construct($title, $content)
    {
        $this->title   = $title;
        $this->content = $content;
    }
    public function getTitle()
    {
        $this->title;
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getContent()
    {
        $this->content;
        return $this->content;
    }
    public function setContent($value)
    {
        $this->content = $value;
    }
}
