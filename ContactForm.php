<?php

namespace PhpTheme\CleanBlogTheme;

use PhpTheme\Helpers\Html;

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

	public function run()
	{
		return $this->render('contact-form', [
            'content' => $this->content,
			'url' => $this->url,
			'submitLabel' => $this->submitLabel,
			'message' => $this->message,
            'formOptions' => Html::mergeOptions(
                $this->defaultFormOptions, 
                $this->formOptions,
                [
                    'action' => $this->url
                ]
            )
		]);
	}

}
