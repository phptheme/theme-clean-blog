<?php

namespace PhpTheme\CleanBlogTheme;

class SocialMenuItem extends \PhpTheme\Html\MenuItem
{

    public $linkAttributes = [
        'target' => '_blank'
    ];

    public $attributes = [
        'class' => 'nav-item'
    ];

    public function render()
    {
        $this->linkAttributes['title'] = $this->label;

        return parent::render();
    }

}