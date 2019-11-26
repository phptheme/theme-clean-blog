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

        $options = $this->socialMenuOptions;

        $options['items'] = $this->socialMenu;

        $socialMenu = $this->theme->socialMenu($options);

        $options = $this->mainMenuOptions;

        $options['items'] = $this->mainMenu;

        $options = $this->mainMenuOptions;

        $options['items'] = $this->mainMenu;

        $options['items'] = array_merge_recursive($options['items'], $this->accountMenu);

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
            'description' => $this->description,
            'errorMessages' => $this->errorMessages,
            'infoMessages' => $this->infoMessages,
            'successMessages' => $this->successMessages
        ]);
    }

}