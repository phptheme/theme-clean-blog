<?php

use PhpTheme\Html\HtmlHelper;

?>
<li class="list-inline-item">

<?= HtmlHelper::beginTag($tag, $options);?>
  <span class="fa-stack fa-lg">
    <i class="fas fa-circle fa-stack-2x"></i>
    <i class="<?= $icon;?> fa-stack-1x fa-inverse"></i>
  </span>
<?= HtmlHelper::endTag($tag);?>

</li>