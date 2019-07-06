<?php

namespace PhpTheme\CleanBlogTheme;

class PostHeader extends \PhpTheme\Core\Widget
{

	public $title = 'Clean Blog';

	public $description = 'A Blog Theme by Start Bootstrap';

    public $created;

	public $image;

	public function run()
	{
        $image = $this->image;

        if (!$image)
        {
            $image = $this->theme->baseUrl . '/img/post-bg.jpg';
        }

		return $this->render('post-header', [
			'title' => $this->title,
			'description' => $this->description,
			'image' => $image,
            'created' => $this->created
		]);
	}

}
