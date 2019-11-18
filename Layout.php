<?php

namespace PhpTheme\CleanBlogTheme;

class Layout extends \PhpTheme\Core\Widget
{
	
	public $content;
	
	public $title = 'Clean Blog - Start Bootstrap Theme';

    public $lang = 'en';

	public function toString() : string
	{
		return $this->render('layout', [
			'content' => $this->content,
			'title' => $this->title
		]);
	}

}