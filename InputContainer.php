<?php

namespace PhpTheme\CleanBlogTheme;

class InputContainer extends \PhpTheme\Core\Widget
{
    
    public $error;

    public $content;

    public $label;

    public $labelOptions = [];

	public function run()
	{
		return $this->render('input-container' , [
            'content' => $this->content,
            'label' => $this->label,
            'error' => $this->error,
            'labelOptions' => $this->labelOptions
		]);
	}

}
