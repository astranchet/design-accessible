<?php snippet('header') ?>

<h2><?= $page->title() ?></h2>

<p><b><?= $page->ressources()->toStructure()->count() ?> ressources</b> sélectionnées avec amour.</p>

<div id="content" class="posts">
	<?php foreach ($page->ressources()->toStructure()->sortBy('date', 'desc') as $ressource): ?>
	  	<article>
			<?php snippet('ressource', ['ressource' => $ressource]) ?>
		</article>
	<?php endforeach ?>
</div>

<?php snippet('footer') ?>
