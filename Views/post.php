<!-- Post Content -->
<article>

<?php if($title):?><h1 class="section-heading"><?= $title;?></h1><?php endif;?>

<?= $content;?>

<?php if($created):?><p><small><?= $created;?></small></p><?php endif;?>

</article>