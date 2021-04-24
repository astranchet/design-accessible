<?php snippet('header') ?>

<h2><?= $site->baseline()->kt() ?></h2>

<?php $quote = $page->quotes()->toStructure()->shuffle()->first(); ?>

<blockquote>
	<p><?= $quote->citation()->kt() ?></p>
	<?php if ($quote->source()->isNotEmpty()) : ?>
		<footer>
		<?php if ($quote->url()->isNotEmpty()) : ?>
			<p>Source : <a href="<?= $quote->url() ?>"><?= $quote->source() ?></a></p>
		<?php else : ?>
			<p>Source : <?= $quote->source() ?></p>
		<?php endif ?>
		</footer>
	<?php endif ?>
</blockquote>

<div id="content">
	<h2>Par où commencer ?</h2>
	<p>L’accessibilité commence dès la phase de conception.</p>

	<ul>
		<?php foreach ($page->getting_started()->toStructure()->limit(3) as $ressource): ?>
			<li><a href="<?= $ressource->url() ?>">
				<h3><?= $ressource->title() ?></h3>
				<p><?= $ressource->desc() ?></p>
				</a>
			</li>
		<?php endforeach ?>
	</ul>

	<h2><b>Les dernières ressources</b> sélectionnées avec amour</h2>

	<div class="posts">
		<?php foreach ($ressources->limit(10) as $ressource): ?>
		  	<article>
				<?php snippet('ressource', ['ressource' => $ressource]) ?>
			</article>
		<?php endforeach ?>
	</div>

	<a href="<?= page('ressources')->url() ?>">👉 Voir toutes les ressources</a>
</div>

<?php snippet('footer') ?>
