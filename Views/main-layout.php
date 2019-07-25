<?php $this->beginLayout(['title' => $title]);?>

<?= $this->navigation($navigation);?>

<?php

if (is_array($header))
{
    echo $this->header($header);
}
else
{
    echo $header; // pre-rendered header
}
?>
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <?= $content;?>
        </div>
    </div>
</div>
<hr>
<?= $this->footer($footer);?>
<?php $this->endLayout();?>