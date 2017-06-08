<?php
class Page
{
    private $title;
    private $content;
    private $url;
    private $tablica;
    
    function __construct($title, $content, $url)
    {
        $this->title   = $title;
        $this->content = $content;
        $this->url = $url;
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
    public function getUrl()
    {
        return $this->url;
    }
    public function setUrl($Urlvalue)
    {
        $this->url = $Urlvalue;
    }
}

