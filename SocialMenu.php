<?php

namespace PhpTheme\CleanBlogTheme;

class SocialMenu extends \PhpTheme\Html\Menu
{

    const MENU_ITEM = SocialMenuItem::class;

    public $attributes = [
        'class' => 'list-inline text-center'
    ];

    public $tag = 'ul';

}