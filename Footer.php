<?php

namespace PhpTheme\CleanBlogTheme;

class Footer extends \PhpTheme\Core\Widget
{

	public $copyright = 'Copyright &copy; Your Website {year}';

	public $buttons = [];

	public function run()
	{
		$copyright = strtr($this->copyright, ['{year}' => date('Y')]);

		return $this->render('footer', [
			'copyright' => $copyright,
			'buttons' => $this->buttons
		]);
	}

}
