<?php $this->theme->beginLayout($layout);?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="<?= $baseUrl;?>"><?= $siteName;?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="<?= $toggleNavigationLabel;?>">
      <?= $menuLabel;?>
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <?= $mainMenu;?>
    </div>
  </div>
</nav>
<header class="masthead" style="background-image: url('<?= $backgroundImage;?>')">
    <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="<?= $contentCol;?>">
                    <div class="site-heading">
                    <?php if($siteTitle):?>
                        <h2 class="heading"><?= $siteTitle;?></h2>
                    <?php endif;?>
                    <?php if($siteDescription):?>
                        <span class="subheading"><?= $siteDescription;?></span>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="<?= $contentCol;?>">
            
            <?php if($title):?>

                <h1><?= $title;?></h1>

            <?php endif;?>

            <?php foreach($successMessages as $message):?>

                <?= $this->theme->message(['message' => $message, 'type' => 'success']);?>

            <?php endforeach;?>

            <?php foreach($errorMessages as $message):?>

                <?= $this->theme->message(['message' => $message, 'type' => 'error']);?>

            <?php endforeach;?>

            <?php foreach($infoMessages as $message):?>

                <?= $this->theme->message(['message' => $message, 'type' => 'info']);?>

            <?php endforeach;?>

            <?= $content;?>

        </div>
    </div>
</div>
<hr>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <?= $socialMenu;?>
                <p class="copyright text-muted"><?= $copyright;?></p>
            </div>
        </div>
    </div>
</footer>
<?php $this->theme->endLayout();?>