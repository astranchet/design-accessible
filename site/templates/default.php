<?php snippet('header') ?>

<div id="content" class="<?= $page->slug(); ?>">
	<?php foreach ($page->sections()->toStructure() as $section): ?>
     	<div class="section <?= $section->style()->or("") ?>">
	    	<div class="container">
            	<?= $section->text()->kt() ?>
          	</div>
        </div>
    <?php endforeach ?>

	<?php if ($page->text()->isNotEmpty()) { ?>
    	<div class="container">
			<?= $page->text()->kt() ?>
		</div>
	<?php } ?>
</div>

<?php snippet('footer') ?>
