<?php snippet('header') ?>

<div class="posts">
	<?php foreach ($page->ressources()->toStructure() as $ressource): ?>
	  	<article>
			<?php snippet('ressource', ['ressource' => $ressource]) ?>
		</article>
	<?php endforeach ?>
</div>

<?php snippet('footer') ?>
