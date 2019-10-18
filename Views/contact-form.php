<?php

use PhpTheme\Html\HtmlHelper;

echo HtmlHelper::beginTag('form', $formOptions);

?>

<?= $content;?>

<br>

<?php if($message):?>

<div id="success"><?= $message;?></div>

<?php endif;?>

<div class="form-group">

<button type="submit" class="btn btn-primary" id="sendMessageButton"><?= $submitLabel;?></button>

</div>

<?= HtmlHelper::endTag('form');?>