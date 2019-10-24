<?php $this->theme->beginLayout([
    'title' => $title
]);?>
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
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                    <h2 class="heading"><?= $title;?></h2>
                    <span class="subheading"><?= $description;?></span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
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