<?php

namespace PhpTheme\Themes\CleanBlog;

class Layout extends \PhpTheme\Core\Widget
{

    public $theme;
	
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