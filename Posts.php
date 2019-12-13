<?php

namespace PhpTheme\CleanBlogTheme;

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
