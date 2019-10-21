<?php

namespace PhpTheme\CleanBlogTheme;

class MainMenu extends \PhpTheme\Core\Widget
{

	public $title;

	public $items = [];

    public $homeUrl;

    public $toggleNavigationLabel = 'Toggle navigation';

    public $menuLabel = 'Menu';

	public function run()
	{
		return $this->render('main-menu', [
			'items' => $this->items,
			'title' => $this->title,
            'homeUrl' => $this->homeUrl,
            'menuLabel' => $this->menuLabel,
            'toggleNavigationLabel' => $this->toggleNavigationLabel
		]);
	}

}