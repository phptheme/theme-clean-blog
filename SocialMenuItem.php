<?php

namespace PhpTheme\CleanBlogTheme;

class SocialMenuItem extends \PhpTheme\Html\MenuItem
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