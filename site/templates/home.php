<?php snippet('header') ?>

<div class="posts">
	<?php foreach (page('ressources')->ressources()->toStructure()->limit(4) as $ressource): ?>
	  	<article>
			<h3><a href="<?= $ressource->url() ?>" class="button"><?= $ressource->title() ?></a></h3>
			<?= $ressource->description()->kt() ?>
			<!-- TODO : afficher les tags -->
		</article>
	<?php endforeach ?>
</div>

<!-- TODO : mettre en place le bon lien -->
<a href="">👉 Voir toutes les ressources</a>

<!-- TODO : mettre en place un footer -->
<?php // snippet('footer') ?>
