<?php // snippet('header') ?>

<h1><?= $page->title() ?></h1>

<div class="posts">
	<?php foreach ($page->ressources()->toStructure() as $ressource): ?>
	  	<article>
			<h3><a href="<?= $ressource->url() ?>" class="button"><?= $ressource->title() ?></a></h3>
			<?= $ressource->description()->kt() ?>
		</article>
	<?php endforeach ?>
</div>

<?php // snippet('sidebar') ?>

<?php // snippet('footer') ?>
