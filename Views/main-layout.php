<?php $this->theme->beginLayout([
    'title' => $title
]);?>

<?= $this->theme->mainMenu($mainMenu);?>

<?php

if (is_array($header))
{
    echo $this->theme->header($header);
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
<?= $this->theme->footer($footer);?>

<?php $this->theme->endLayout();?>