<?php

namespace PhpTheme\CleanBlogTheme;

class MainLayout extends \PhpTheme\Core\Widget
{

    public $head;

    public $beginBody;

    public $endBody;
    
    public $content;
    
    public $header = [];
    
    public $footer = [];
    
    public $navigation = [];

    public $title = 'Clean Blog - Start Bootstrap Theme';

    public function run()
    {
        return $this->render('main-layout', [
            'content' => $this->content,
            'header' => $this->header,
            'navigation' => $this->navigation,
            'footer' => $this->footer,
            'title' => $this->title,
            'head' => $this->head,
            'beginBody' => $this->beginBody,
            'endBody' => $this->endBody
        ]);
    }

}