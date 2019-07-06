<?php

namespace PhpTheme\CleanBlogTheme;

class FooterButton extends \PhpTheme\Core\Widget
{

	public $url;

	public $icon;

	public $options = [];

    public $tag = 'a';

    public $label;

	public function run()
	{
		$options = $this->options;

		$options['href'] = $this->url;

		$options['target'] = '_blank';

        if ($this->label)
        {
            $options['title'] = $this->label;
        }

		return $this->render('footer-button', [
			'url' => $this->url,
			'icon' => $this->icon,
			'options' => $options,
            'tag' => $this->tag
		]);
	}

}
