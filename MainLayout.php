<?php

namespace PhpTheme\CleanBlogTheme;

class MainLayout extends \PhpTheme\Core\Widget
{
    
    public $content;
    
    public $mainMenu = [];

    public $mainMenuOptions = [];

    public $socialMenuOptions = [];

    public $socialMenu = [];

    public $title = 'Clean Blog by Start Bootstrap';

    public $copyright = 'Copyright &copy; My Company {year}';

    public $siteName = 'My Site';

    public $backgroundImage;

    public $toggleNavigationLabel = 'Toggle navigation';

    public $menuLabel = 'Menu';

    public $baseUrl = '/';

    public $header;

    public $description;

    public function run()
    {
        $copyright = strtr($this->copyright, ['{year}' => date('Y')]);

        $options = $this->socialMenuOptions;

        $options['items'] = $this->socialMenu;

        $socialMenu = $this->theme->socialMenu($options);

        $options = $this->mainMenuOptions;

        $options['items'] = $this->mainMenu;

        $mainMenu = $this->theme->mainMenu($options);

        $backgroundImage = $this->backgroundImage;

        if (!$backgroundImage)
        {
            $backgroundImage = $this->theme->baseUrl . '/img/home-bg.jpg';
        }

        return $this->render('main-layout', [
            'backgroundImage' => $backgroundImage,
            'content' => $this->content,
            'title' => $this->title,
            'mainMenu' => $mainMenu,
            'socialMenu' => $socialMenu,
            'copyright' => $copyright,
            'siteName' => $this->siteName,
            'toggleNavigationLabel' => $this->toggleNavigationLabel,
            'menuLabel' => $this->menuLabel,
            'baseUrl' => $this->baseUrl,
            'header' => $this->header,
            'description' => $this->description
        ]);
    }

}