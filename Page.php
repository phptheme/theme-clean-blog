<?php

namespace PhpTheme\CleanBlogTheme;

class Page extends \PhpTheme\Core\Widget
{

	public $text;

    public $title;

	public function render()
	{
		return $this->render('page', [
			'text' => $this->text,
            'title' => $this->title
		]);
	}

}