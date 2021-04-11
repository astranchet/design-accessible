<?php // snippet('header') ?>

<h1><?= $page->title() ?></h1>

<div class="posts">
	<?php foreach ($page->ressources()->toStructure() as $ressource): ?>
	  	<article>
			<?php snippet('ressource', ['ressource' => $ressource]) ?>
		</article>
	<?php endforeach ?>
</div>

<?php // snippet('sidebar') ?>

<?php // snippet('footer') ?>
