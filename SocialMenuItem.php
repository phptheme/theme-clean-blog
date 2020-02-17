<?php

namespace PhpTheme\Themes\CleanBlog;

class SocialMenuItem extends \PhpTheme\Bootstrap4\MenuItem
{

    public $linkAttributes = [
        'target' => '_blank'
    ];

    public $attributes = [
        'class' => 'list-inline-item'
    ];

    public $iconTemplate = '<span class="fa-stack fa-lg"><i class="fas fa-circle fa-stack-2x"></i>'
        . '<i class="{icon}"></i></span>';

    public function toString() : string
    {
        $this->linkAttributes['title'] = $this->label;

        return parent::toString();
    }

}