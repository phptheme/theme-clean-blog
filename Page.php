<?php

namespace PHPTheme\CleanBlogTheme;

use PHPTheme;
use PHPTheme\Widget;

class Page extends Widget
{

	public $content;

	public function render()
	{
		return PHPTheme::view('page', [
			'content' => $this->content
		]);
	}

}
