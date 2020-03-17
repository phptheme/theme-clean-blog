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

    public $siteName = 'My Site';

    public $siteTitle;

    public $siteDescription;

    public $backgroundImage;

    public $toggleNavigationLabel = 'Toggle navigation';

    public $menuLabel = 'Menu';

    public $baseUrl = '/';

    public $header;

    public $accountMenu = [];

    public $accountMenuOptions = [];

    public $userMenu = [];

    public $userMenuOptions = [];

    public $accountLabel = 'Account';

    public $successMessages = [];

    public $errorMessages = [];

    public $infoMessages = [];

    public $copyright;

    public $contentCol = 'col-lg-8 col-md-10 mx-auto';

    public function toString() : string
    {
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
            'copyright' => $this->theme->getCopyright($this->copyright),
            'siteName' => $this->siteName,
            'toggleNavigationLabel' => $this->toggleNavigationLabel,
            'menuLabel' => $this->menuLabel,
            'baseUrl' => $this->baseUrl,
            'header' => $this->header,
            'siteDescription' => $this->siteDescription,
            'siteTitle' => $this->siteTitle,
            'errorMessages' => $this->errorMessages,
            'infoMessages' => $this->infoMessages,
            'successMessages' => $this->successMessages,
            'layout' => $layout,
            'contentCol' => $this->contentCol
        ]);
    }

}