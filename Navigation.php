<?php

namespace PhpTheme\CleanBlogTheme;

class Navigation extends \PhpTheme\Core\Widget
{

	public $title;

	public $items = [];

    public $homeUrl;

    public $toggleNavigationLabel = 'Toggle navigation';

    public $menuLabel = 'Menu';

	public function run()
	{
		return $this->render('navigation', [
			'items' => $this->items,
			'title' => $this->title,
            'homeUrl' => $this->homeUrl,
            'menuLabel' => $this->menuLabel,
            'toggleNavigationLabel' => $this->toggleNavigationLabel
		]);
	}

}