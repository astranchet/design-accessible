<?php snippet('header') ?>

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

<h4>Par où commencer ?</h4>
<p>L’accessibilité commence dès la phase de conception.</p>

<ul>
	<?php foreach ($page->getting_started()->toStructure()->limit(3) as $ressource): ?>
		<li><a href="<?= $ressource->url() ?>">
			<b><?= $ressource->title() ?></b><br />
			<?= $ressource->desc() ?>
			</a>
		</li>
	<?php endforeach ?>
</ul>

<div class="posts">
	<?php foreach (page('ressources')->ressources()->toStructure()->limit(4) as $ressource): ?>
	  	<article>
			<?php snippet('ressource', ['ressource' => $ressource]) ?>
		</article>
	<?php endforeach ?>
</div>

<a href="<?= page('ressources')->url() ?>">👉 Voir toutes les ressources</a>

<?php snippet('footer') ?>
