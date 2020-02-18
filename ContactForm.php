<?php

namespace PhpTheme\Themes\CleanBlog;

use PhpTheme\Html\HtmlHelper;

class ContactForm extends \PhpTheme\Core\Widget
{

	public $url;

	public $submitLabel = 'Send';

	public $message;

    public $formOptions = [];

    public $defaultFormOptions = [
        'name' => 'sentMessage',
        'id' => 'contactForm',
        'novalidate' => 'novalidate',
        'method' => 'POST'
    ];

    public $content;

	public function toString() : string
	{
		return $this->render('contact-form', [
            'content' => $this->content,
			'url' => $this->url,
			'submitLabel' => $this->submitLabel,
			'message' => $this->message,
            'formOptions' => HtmlHelper::mergeOptions(
                $this->defaultFormOptions, 
                $this->formOptions,
                [
                    'action' => $this->url
                ]
            )
		]);
	}

}