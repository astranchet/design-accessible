<!-- TODO faire le header avec le menu -->
<?php // snippet('header') ?>

<h1><?= $page->title()->kt() ?></h1>

<h2><?= $page->baseline()->kt() ?></h2>

<?php $quote = $page->quotes()->toStructure()->shuffle()->first(); ?>

<h3><?= $quote->citation()->kt() ?></h3>
<!-- TODO : seulement si URL -->

<?php if ($quote->source()->isNotEmpty()) : ?>
	<?php if ($quote->url()->isNotEmpty()) : ?>
		<p>Source : <a href="<?= $quote->url() ?>"><?= $quote->source() ?></a></p>
	<?php else : ?>
		<p>Source : <?= $quote->source() ?></p>
	<?php endif ?>
<?php endif ?>

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
