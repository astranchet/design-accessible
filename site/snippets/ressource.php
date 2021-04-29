<h3 class="card__title">
  <a href="<?= $ressource->url() ?>">
    <?= $ressource->title() ?>
  </a>
  <span class="card__type">
    <?= $ressource->type() ?>
  </span>
</h3>

<?= $ressource->description()->kt() ?>

<?php if ($ressource->source()->isNotEmpty()) : ?>
  <p class="card__author">
    Par <span><?= $ressource->source() ?></span>
  </p>
<?php endif ?>

<ul class="tags">
	<?php foreach ($ressource->phase()->split() as $phase): ?>
    <li class="tags__item">
      <a href="<?= url($page->url(), ['params' => ['phase' => $phase]]) ?>" class="tags__link">
        <?= $phase ?>
      </a>
    </li>
  <?php endforeach ?>

  <?php if ($ressource->lang()->isNotEmpty()) : ?>
    <li class="tags__item">
      <a href="<?= url($page->url(), ['params' => ['lang' => $ressource->lang()]]) ?>" class="tags__link">
        <?= $langs[$ressource->lang()->value()] ?>
      </a>
    </li>
  <?php endif ?>

  <?php foreach ($ressource->thematique()->split() as $thematique): ?>
    <li class="tags__item">
      <a href="<?= url($page->url(), ['params' => ['thematique' => $thematique]]) ?>" class="tags__link">
        <?= $thematique ?>
      </a>
    </li>
  <?php endforeach ?>
</ul>
