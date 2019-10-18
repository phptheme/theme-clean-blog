<?php

use PhpTheme\Html\HtmlHelper;

?>
<div class="control-group">

    <div class="form-group floating-label-form-group controls">

        <?php

        if ($label)
        {
            echo HtmlHelper::tag('label', $label, $labelOptions);
        }

        echo $content;

        ?>

        <?php if($error):?>

            <p class="help-block text-danger"><?= $error?></p>

        <?php endif;?>

    </div>

</div>