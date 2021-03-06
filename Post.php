<?php

namespace PhpTheme\Themes\CleanBlog;

class Post extends \PhpTheme\Core\Widget
{

    public $theme;

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