<?php snippet('header') ?>

<div id="content" class="<?= $page->slug(); ?>">
    <div class="container">
		<?= $page->text()->kt() ?>
	</div>
</div>

<?php snippet('footer') ?>
