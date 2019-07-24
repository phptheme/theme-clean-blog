<!DOCTYPE html>
<html lang="<?= $this->lang;?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php if($title):?><title><?= $title;?></title><?php endif;?>
<!-- Bootstrap core CSS -->
<link href="<?= $this->baseUrl;?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template -->
<link href="<?= $this->baseUrl;?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- Custom styles for this template -->
<link href="<?= $this->baseUrl;?>/css/clean-blog.min.css" rel="stylesheet">
<!-- Bootstrap core JavaScript -->
<script src="<?= $this->baseUrl;?>/vendor/jquery/jquery.min.js"></script>
<style type="text/css">
.page-item.active .page-link{
	background-color: #212529;
	border-color: #212529;
}
.page-link {
	color: #212529;
}
.page-link:hover {
	color: #212529;
}
a.page-link:focus {
	box-shadow: none;
}
</style>
<?= $this->head;?>
</head>
<body>
<?= $this->beginBody;?>
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
<script src="<?= $this->baseUrl;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scripts for this template -->
<script src="<?= $this->baseUrl;?>/js/clean-blog.min.js"></script>
<?= $this->endBody;?>
</body>
</html>