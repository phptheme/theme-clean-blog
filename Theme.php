<?php

namespace PhpTheme\CleanBlogTheme;

class Theme extends \PhpTheme\Core\Theme
{

    const INPUT_CONTAINER = InputContainer::class;

    const BUTTON = Button::class;

    const CONTACT_FORM = ContactForm::class;

    const FOOTER = Footer::class;

    const FOOTER_BUTTON = FooterButton::class;

    //const FORM_FIELD = FormField::class; 

    const HEADER = Header::class;

    const POST_HEADER = PostHeader::class;

    const LAYOUT = Layout::class;

    const NAVIGATION = Navigation::class;

    const NAVIGATION_ITEM = NavigationItem::class;

    const PAGE = Page::class;

    const POST = Post::class;

    const POSTS = Posts::class;

    const POSTS_ITEM = PostsItem::class;

    protected $_layout;

    public function inputContainer(array $params = [])
    {
        return $this->widget(static::INPUT_CONTAINER, $params);
    }

    public function button(array $params = [])
    {
        return $this->widget(static::BUTTON, $params);
    }  

    public function contactForm(array $params = [])
    {
        return $this->widget(static::CONTACT_FORM, $params);
    }    

    public function footer(array $params = [])
    {
        return $this->widget(static::FOOTER, $params);
    }    

    public function footerButton(array $params = [])
    {
        return $this->widget(static::FOOTER_BUTTON, $params);
    }

    public function header(array $params = [])
    {
        return $this->widget(static::HEADER, $params);
    }

    public function postHeader(array $params = [])
    {
        return $this->widget(static::POST_HEADER, $params);
    }

    public function navigation(array $params = [])
    {
        return $this->widget(static::NAVIGATION, $params);
    }

    public function navigationItem(array $params = [])
    {
        return $this->widget(static::NAVIGATION_ITEM, $params);
    }    

    public function page(array $params = [])
    {
        return $this->widget(static::PAGE, $params);
    }    

    public function post(array $params = [])
    {
        return $this->widget(static::POST, $params);
    }    

    public function posts(array $params = [])
    {
        return $this->widget(static::POSTS, $params);
    }

    public function postsItem(array $params = [])
    {
        return $this->widget(static::POSTS_ITEM, $params);
    }    

    public function beginLayout(array $params = [])
    {
        $this->_layout = $this->beginWidget(static::LAYOUT, $params);

        return $this->_layout;
    }

    public function endLayout()
    {
        echo $this->endWidget($this->_layout);
    }

}