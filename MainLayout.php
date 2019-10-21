<?php

namespace PhpTheme\CleanBlogTheme;

class MainLayout extends \PhpTheme\Core\Widget
{
    
    public $content;
    
    public $header = [];
    
    public $footer = [];
    
    public $mainMenu = [];

    public $title = 'Clean Blog - Start Bootstrap Theme';

    public function run()
    {
        return $this->render('main-layout', [
            'content' => $this->content,
            'header' => $this->header,
            'mainMenu' => $this->mainMenu,
            'footer' => $this->footer,
            'title' => $this->title
        ]);
    }

}