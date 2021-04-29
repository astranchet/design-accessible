<?php if ($ressource->type() == "Citation") { ?>
	<blockquote>
		<p><?= $ressource->title()->kt() ?></p>
		<p><small>— Par <span><?= $ressource->source() ?></small></p>
	</blockquote>
<?php } else { ?>
<h3><a href="<?= $ressource->url() ?>" class="button"><?= $ressource->title() ?></a></h3>
<?= $ressource->description()->kt() ?>

<?php if ($ressource->source()->isNotEmpty()) : ?>
<p><small>Par <span><?= $ressource->source() ?></span></small></p>
<?php endif ?>

<span><?= $ressource->type() ?></span>

<ul class="tags">
	<?php foreach ($ressource->phase()->split() as $phase): ?>
  		<li><a href="<?= url($page->url(), ['params' => ['phase' => $phase]]) ?>"><?= $phase ?></a></li>
  	<?php endforeach ?>

	<?php if ($ressource->lang()->isNotEmpty()) : ?>
  		<li><a href="<?= url($page->url(), ['params' => ['lang' => $ressource->lang()]]) ?>"><?= $langs[$ressource->lang()->value()] ?></a></li>
  	<?php endif ?>

	<?php foreach ($ressource->thematique()->split() as $thematique): ?>
  		<li><a href="<?= url($page->url(), ['params' => ['thematique' => $thematique]]) ?>"><?= $thematique ?></a></li>
  	<?php endforeach ?>
</ul>	
<?php } ?>
