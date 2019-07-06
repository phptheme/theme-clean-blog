<?php

namespace PhpTheme\CleanBlogTheme;

class Post extends \PhpTheme\Core\Widget
{

	public $content;

	public $title;

	public $created;

	public function run()
	{
		return $this->render('post', [
			'content' => $this->content,
			'title' => $this->title,
			'created' => $this->created
		]);
	}

}