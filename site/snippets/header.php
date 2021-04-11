<ul>
	<!-- TODO : link to homepage -->
	<li><a href="">Découvrir</a></li>
	<!-- TODO : link to ressources -->
	<li><a href="">Toutes les ressources</a></li>
	<!-- TODO : link to contribute page -->
	<li><a href="">Contribuer</a></li>
</ul>

<h1><?= $page->title()->kt() ?></h1>

<h2><?= $page->baseline()->kt() ?></h2>

<?php $quote = $page->quotes()->toStructure()->shuffle()->first(); ?>

<h3><?= $quote->citation()->kt() ?></h3>

<?php if ($quote->source()->isNotEmpty()) : ?>
	<?php if ($quote->url()->isNotEmpty()) : ?>
		<p>Source : <a href="<?= $quote->url() ?>"><?= $quote->source() ?></a></p>
	<?php else : ?>
		<p>Source : <?= $quote->source() ?></p>
	<?php endif ?>
<?php endif ?>