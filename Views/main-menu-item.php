<?php

use PhpTheme\Html\HtmlHelper;

?>
<li class="nav-item">
	<?= HtmlHelper::beginTag('a', $options);?>
	<?= HtmlHelper::escape($label);?>
	<?= HtmlHelper::endTag('a');?>
</li>