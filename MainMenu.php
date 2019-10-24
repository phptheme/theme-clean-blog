<?php

namespace PhpTheme\CleanBlogTheme;

class MainMenu extends \PhpTheme\Html\Menu
{

    const MENU_ITEM = MainMenuItem::class;

    public $tag = 'ul';

    public $attributes = ['class' => 'navbar-nav ml-auto'];

}