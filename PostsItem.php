<?php

namespace PhpTheme\CleanBlogTheme;

class PostsItem extends \PhpTheme\Core\ThemeWidget
{

	public $created;

	public $url;

	public $title;

	public $description;

	public function toString() : string
	{
		return $this->render('posts-item', [
			'created' => $this->created,
			'url' => $this->url,
			'title' => $this->title,
			'description' => $this->description
		]);
	}

}
