<?php

use PhpTheme\Core\Html;

?>
<li class="list-inline-item">

<?= Html::beginTag($tag, $options);?>
  <span class="fa-stack fa-lg">
    <i class="fas fa-circle fa-stack-2x"></i>
    <i class="<?= $icon;?> fa-stack-1x fa-inverse"></i>
  </span>
<?= Html::endTag($tag);?>

</li>