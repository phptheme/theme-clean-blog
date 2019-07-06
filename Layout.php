<?php

namespace PhpTheme\CleanBlogTheme;

class Layout extends \PhpTheme\Core\Widget
{
	
	public $content;
	
	public $header = [];
	
	public $footer = [];
	
	public $navigation = [];

	public $title = 'Clean Blog - Start Bootstrap Theme';

    public $lang = 'en';

    public $head;

    public $beginBody;

    public $endBody;

	public function run()
	{
		return $this->render('layout', [
			'content' => $this->content,
			'header' => $this->header,
			'navigation' => $this->navigation,
			'footer' => $this->footer,
			'title' => $this->title,
            'head' => $this->head,
            'beginBody' => $this->beginBody,
            'endBody' => $this->endBody
		]);
	}

}