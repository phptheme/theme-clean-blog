<?php

namespace PhpTheme\CleanBlogTheme;

class SocialMenu extends \PhpTheme\Bootstrap4\Menu
{

    const MENU_ITEM = SocialMenuItem::class;

    public $attributes = [
        'class' => 'list-inline text-center'
    ];

    public $tag = 'ul';

}