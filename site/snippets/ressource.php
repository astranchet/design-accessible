<h3><a href="<?= $ressource->url() ?>" class="button"><?= $ressource->title() ?></a></h3>
<?= $ressource->description()->kt() ?>

<?php if ($ressource->source()->isNotEmpty()) : ?>
<p>Par <span><?= $ressource->source() ?></span></p>
<?php endif ?>

<span><?= $ressource->type() ?></span>

<ul class="tags">
	<?php foreach ($ressource->phase()->split() as $phase): ?>
  		<li><?= $phase ?></li>
  	<?php endforeach ?>

	<?php if ($ressource->lang()->isNotEmpty()) : ?>
  		<li><?= $ressource->lang() ?></li>
  	<?php endif ?>

	<?php foreach ($ressource->thematique()->split() as $thematique): ?>
  		<li><?= $thematique ?></li>
  	<?php endforeach ?>
</ul>