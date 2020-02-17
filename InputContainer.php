<?php

namespace PhpTheme\Themes\CleanBlog;

class InputContainer extends \PhpTheme\Core\ThemeWidget
{
    
    public $error;

    public $content;

    public $label;

    public $labelOptions = [];

	public function toString() : string
	{
		return $this->render('input-container' , [
            'content' => $this->content,
            'label' => $this->label,
            'error' => $this->error,
            'labelOptions' => $this->labelOptions
		]);
	}

}