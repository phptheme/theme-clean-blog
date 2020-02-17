<?php

namespace PhpTheme\Themes\CleanBlog;

class MainMenu extends \PhpTheme\Bootstrap4\Menu
{

    const MENU_ITEM = MainMenuItem::class;

    public $tag = 'ul';

    public $attributes = ['class' => 'navbar-nav ml-auto'];

}