<?php snippet('header') ?>

<div class="posts">
	<?php foreach (page('ressources')->ressources()->toStructure()->limit(4) as $ressource): ?>
	  	<article>
	  		<!-- TODO : type -->

			<h3><a href="<?= $ressource->url() ?>" class="button"><?= $ressource->title() ?></a></h3>
			<?= $ressource->description()->kt() ?>
			
			<?php if ($ressource->source()->isNotEmpty()) : ?>
			<p>Par <span><?= $ressource->source() ?></span></p>
		  	<?php endif ?>
			
			<ul class="tags">
				<!-- TODO : il peut y avoir plusieurs phases -->
				<?php if ($ressource->phase()->isNotEmpty()) : ?>
			  		<li><?= $ressource->phase() ?></li>
			  	<?php endif ?>
				<?php if ($ressource->lang()->isNotEmpty()) : ?>
			  		<li><?= $ressource->lang() ?></li>
			  	<?php endif ?>
				<!-- TODO : il peut y avoir plusieurs thematiques -->
				<?php if ($ressource->thematique()->isNotEmpty()) : ?>
			  		<li><?= $ressource->thematique() ?></li>
			  	<?php endif ?>
			</ul>

		</article>
	<?php endforeach ?>
</div>

<a href="<?= page('ressources')->url() ?>">👉 Voir toutes les ressources</a>

<?php snippet('footer') ?>
