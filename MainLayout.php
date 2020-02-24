<?php

namespace PhpTheme\Themes\CleanBlog;

class MainLayout extends \PhpTheme\Core\Widget
{

    public $theme;

    public $layout = [];
    
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

    public $accountMenu = [];

    public $accountMenuOptions = [];

    public $userMenu = [];

    public $userMenuOptions = [];

    public $accountLabel = 'Account';

    public $successMessages = [];

    public $errorMessages = [];

    public $infoMessages = [];

    public function toString() : string
    {
        $copyright = strtr($this->copyright, ['{year}' => date('Y')]);

        $backgroundImage = $this->backgroundImage;

        if (!$backgroundImage)
        {
            $backgroundImage = $this->theme->baseUrl . '/img/home-bg.jpg';
        }

        $mainMenu = array_merge($this->mainMenuOptions, ['items' => $this->mainMenu]);

        if ($this->accountMenu)
        {
            $mainMenu['items'] = array_merge($mainMenu['items'], $this->accountMenu);
        }

        $mainMenu = $this->theme->mainMenu($mainMenu);

        $socialMenu = $this->theme->socialMenu(array_merge($this->socialMenuOptions, ['items' => $this->socialMenu]));

        $layout = $this->layout;

        if ($this->title)
        {
            $layout['title'] = $this->title;
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
            'description' => $this->description,
            'errorMessages' => $this->errorMessages,
            'infoMessages' => $this->infoMessages,
            'successMessages' => $this->successMessages,
            'layout' => $layout
        ]);
    }

}