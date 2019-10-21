<!DOCTYPE html>
<html lang="<?= $this->theme->lang;?>">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php if($title):?><title><?= $title;?></title><?php endif;?>
<!-- Bootstrap core CSS -->
<link href="<?= $this->theme->baseUrl;?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom fonts for this template -->
<link href="<?= $this->theme->baseUrl;?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- Custom styles for this template -->
<link href="<?= $this->theme->baseUrl;?>/css/clean-blog.min.css" rel="stylesheet">
<!-- Bootstrap core JavaScript -->
<script src="<?= $this->theme->baseUrl;?>/vendor/jquery/jquery.min.js"></script>
<?= $this->theme->head;?>
</head>
<body>
<?= $this->theme->beginBody;?>
<?= $content;?>
<script src="<?= $this->theme->baseUrl;?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Custom scripts for this template -->
<script src="<?= $this->theme->baseUrl;?>/js/clean-blog.min.js"></script>
<?= $this->theme->endBody;?>
</body>
</html>