<?php snippet('header') ?>

<h2><?= $page->title() ?></h2>

<div id="content" class="posts">
	<?php foreach ($page->ressources()->toStructure() as $ressource): ?>
	  	<article>
			<?php snippet('ressource', ['ressource' => $ressource]) ?>
		</article>
	<?php endforeach ?>
</div>

<?php snippet('footer') ?>
