<?php

namespace PhpTheme\Themes\CleanBlog;

class Posts extends \PhpTheme\Core\ThemeWidget
{

	public $items = [];

	public function toString() : string
	{
		return $this->render('posts', [
			'items' => $this->items
		]);
	}

}
