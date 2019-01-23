<?php

namespace PHPTheme\CleanBlogTheme;

use PHPTheme;
use PHPTheme\Widget;

class Posts extends Widget
{

	public $items = [];
	
	public $button;

	public function render()
	{
		return PHPTheme::view('posts', [
			'items' => $this->items,
			'button' => $this->button
		]);
	}

}
