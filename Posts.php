<?php

namespace PhpTheme\CleanBlogTheme;

class Posts extends \PhpTheme\Core\Widget
{

	public $items = [];

	public function run()
	{
		return $this->render('posts', [
			'items' => $this->items
		]);
	}

}
