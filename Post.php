<?php

namespace PhpTheme\CleanBlogTheme;

class Post extends \PhpTheme\Core\Widget
{

	public $text;

	public $title;

	public $created;

	public function run()
	{
		return $this->render('post', [
			'text' => $this->text,
			'title' => $this->title,
			'created' => $this->created
		]);
	}

}