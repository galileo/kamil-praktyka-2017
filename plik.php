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
        if ($this->title) {
            echo "$this->title";
        }
    }
    public function setTitle()
    {
        return $this->title;
    }
}
