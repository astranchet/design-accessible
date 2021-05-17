<?php if ($ressource->type() == "Citation") { ?>
	<blockquote>
		<p><?= $ressource->title()->kt() ?></p>
		<p class="card__author">
			— Par <span><?= $ressource->source() ?>
		</p>
	</blockquote>

<?php } else { ?>
<h3 class="card__title">
  <a href="<?= $ressource->url() ?>">
    <?= $ressource->title() ?>
  </a>
  <span class="card__type">
    <?= $ressource->type() ?>
  </span>
</h3>

<div class="card__description">
  <?= $ressource->description()->kt() ?>
</div>

<?php if ($ressource->source()->isNotEmpty()) : ?>
  <p class="card__author">
    Par <span><?= $ressource->source() ?></span>
  </p>
<?php endif ?>

<ul class="tags">
	<?php foreach ($ressource->phase()->split() as $phase): ?>
    <li class="tags__item tags__item-phase">
      <a href="<?= url($page->url(), ['params' => ['phase' => $phase]]) ?>" class="tags__link">
        <?= $phase ?>
      </a>
    </li>
  <?php endforeach ?>

  <?php foreach ($ressource->thematique()->split() as $thematique): ?>
    <li class="tags__item tags__item-thematique">
      <a href="<?= url($page->url(), ['params' => ['thematique' => $thematique]]) ?>" class="tags__link">
        <?= $thematique ?>
      </a>
    </li>
  <?php endforeach ?>

  <?php if ($ressource->lang()->isNotEmpty()) : ?>
    <li class="tags__item tags__item-lang">
      <a href="<?= url($page->url(), ['params' => ['lang' => $ressource->lang()]]) ?>" class="tags__link">
        <?= $langs[$ressource->lang()->value()] ?>
      </a>
    </li>
  <?php endif ?>
</ul>

<?php } ?>