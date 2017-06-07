<?php
class Page
{
    private $title;
    private $content;
    
    function __construct($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
            $this->title;
    }
    public function setTitle()
    {
        return $this->title;
    }
    function __construct($content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        $this->conent;
    }
    public function setContent()
    {
        return $this->content;
    }
}
