<?php
namespace App;

class Page
{
    public $page = 'home';

    public function __construct($pages = [])
    {
        foreach($pages as $k => $page){
            echo $k.' - '.$page  . '<br>';
        }
    }

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }
}