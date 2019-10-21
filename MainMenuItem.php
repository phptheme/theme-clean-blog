<?php

namespace PhpTheme\CleanBlogTheme;

class MainMenuItem extends \PhpTheme\Core\Widget
{

	public $url;

	public $label;

	public $options = [];

	public function run()
	{
		$options = $this->options;

		$options['class'] = 'nav-link';

		$options['href'] = $this->url;

		return $this->render('main-menu-item', [
			'url' => $this->url,
			'label' => $this->label,
			'options' => $options 
		]);
	}

}