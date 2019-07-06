<div class="post-preview">

	<a href="<?= $url;?>">

		<h2 class="post-title"><?= $title?></h2>

        <?php if($description):?>
		  
          <h3 class="post-subtitle"><?= $description;?></h3>

        <?php endif;?>

	</a>

	<?php if($created):?>

        <p class="post-meta"><?= $created;?></p>

    <?php endif;?>

</div>