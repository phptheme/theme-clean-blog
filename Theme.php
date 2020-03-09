<?php

namespace PhpTheme\Themes\CleanBlog;

class Theme extends \PhpTheme\Themes\Bootstrap4\Theme
{

    const INPUT_CONTAINER = InputContainer::class;

    const BUTTON = Button::class;

    const CONTACT_FORM = ContactForm::class;

    const POST_HEADER = PostHeader::class;

    const LAYOUT = Layout::class;

    const MAIN_LAYOUT = MainLayout::class;

    const MAIN_MENU = MainMenu::class;

    const PAGE = Page::class;

    const POST = Post::class;

    const POSTS = Posts::class;

    const POSTS_ITEM = PostsItem::class;

    const SOCIAL_MENU = SocialMenu::class;

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

    public function postHeader(array $params = [])
    {
        return $this->widget(static::POST_HEADER, $params);
    }

    public function page(array $params = [])
    {
        return $this->widget(static::PAGE, $params);
    }    

    public function post(array $params = [])
    {
        return $this->widget(static::POST, array_merge($params, ['theme' => $this]));
    }    

    public function posts(array $params = [])
    {
        return $this->widget(static::POSTS, array_merge($params, ['theme' => $this]));
    }

    public function postsItem(array $params = [])
    {
        return $this->widget(static::POSTS_ITEM, array_merge($params, ['theme' => $this]));
    }    

    public function beginLayout(array $params = [])
    {
        $this->_layout = $this->beginWidget(static::LAYOUT, array_merge($params, ['theme' => $this]));

        return $this->_layout;
    }

    public function endLayout()
    {
        echo $this->endWidget($this->_layout);
    }

    public function mainLayout(array $params = [])
    {
        return $this->widget(static::MAIN_LAYOUT, array_merge($params, ['theme' => $this]));
    }
 
    public function mainMenu(array $params = [])
    {
        return $this->widget(static::MAIN_MENU, $params);
    }

    public function socialMenu(array $params = [])
    {
        return $this->widget(static::SOCIAL_MENU, $params);
    }

}