<?php snippet('header') ?>

<h2><?= $page->title() ?></h2>

<p><b><?= $ressources->count() ?> ressources</b> sélectionnées avec amour.</p>

<?php snippet('filters') ?>

<div id="content" class="posts">
	<?php foreach ($ressources as $ressource): ?>
	  	<article>
			<?php snippet('ressource', ['ressource' => $ressource]) ?>
		</article>
	<?php endforeach ?>
</div>

<?php snippet('footer') ?>
