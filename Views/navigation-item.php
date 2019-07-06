<?php

use PhpTheme\Core\Html;

?>

<li class="nav-item">

	<?= Html::beginTag('a', $options);?>
	
	<?= Html::escape($label);?>
	
	<?= Html::endTag('a');?>

</li>