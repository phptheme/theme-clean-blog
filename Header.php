<?php

namespace PhpTheme\CleanBlogTheme;

class Header extends \PhpTheme\Core\Widget
{

	public $title = 'Clean Blog';

	public $description = 'A Blog Theme by Start Bootstrap';

	public $image;

	public function run()
	{
        $image = $this->image;

        if (!$image)
        {
            $image = $this->theme->baseUrl . '/img/home-bg.jpg';
        }

		return $this->render('header', [
			'title' => $this->title,
			'description' => $this->description,
			'image' => $image
		]);
	}

}
