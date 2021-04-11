<?php snippet('header') ?>

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
