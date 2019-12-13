<?php

namespace PhpTheme\CleanBlogTheme;

class Post extends \PhpTheme\Core\ThemeWidget
{

	public $text;

	public $title;

	public $created;

	public function toString() : string
	{
		return $this->render('post', [
			'text' => $this->text,
			'title' => $this->title,
			'created' => $this->created
		]);
	}

}