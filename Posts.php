<?php

namespace PhpTheme\Themes\CleanBlog;

class Posts extends \PhpTheme\Core\Widget
{

    public $theme;

	public $items = [];

	public function toString() : string
	{
		return $this->render('posts', [
			'items' => $this->items
		]);
	}

}
