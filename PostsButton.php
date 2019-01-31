<?php

namespace Theme\CleanBlog;

use PHPTheme;
use PHPTheme\Widget;

class PostsButton extends Widget
{

	public $url = '#';

	public $label = 'Older Posts &rarr;';

	public function render()
	{
		return PHPTheme::view('posts-button', [
			'url' => $this->url,
			'label' => $this->label 
		]);
	}

}
