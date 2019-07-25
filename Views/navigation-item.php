<?php

use PhpTheme\Helpers\Html;

?>
<li class="nav-item">
	<?= Html::beginTag('a', $options);?>
	<?= Html::escape($label);?>
	<?= Html::endTag('a');?>
</li>