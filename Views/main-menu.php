<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand" href="<?= $homeUrl;?>"><?= $title;?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="<?= $toggleNavigationLabel;?>">
      <?= $menuLabel;?>
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
      	<?php foreach($items as $item):?>
      		<?= $this->theme->mainMenuItem($item);?>
        <?php endforeach;?>
      </ul>
    </div>
  </div>
</nav>