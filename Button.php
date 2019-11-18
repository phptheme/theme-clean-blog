<?php

namespace PhpTheme\CleanBlogTheme;

class Button extends \PhpTheme\Core\Widget
{

	public $url = '#';

	public $label = 'Older Posts &rarr;';

    public $align = 'left';

	public function toString() : string
	{
        $alignClass = '';

        if ($this->align == 'right')
        {
            $alignClass = ' float-right';
        }

		return $this->render('button', [
			'url' => $this->url,
			'label' => $this->label,
            'alignClass' => $alignClass
		]);
	}

}
