<nav class="filters" role="navigation" aria-label="Navigation par filtres">
  <ul class="tags">
    <?php foreach($phases as $phase): ?>
    <li class="tags__item tags__item-phase">
      <a href="<?= url($page->url(), ['params' => ['phase' => $phase]]) ?>">
        <?= html($phase) ?>
      </a>
    </li>
    <?php endforeach ?>

    <?php foreach($langs as $id => $lang): ?>
    <li class="tags__item tags__item-lang">
      <a href="<?= url($page->url(), ['params' => ['lang' => $id]]) ?>">
        <?= html($lang) ?>
      </a>
    </li>
    <?php endforeach ?>

    <?php foreach($thematiques as $thematique): ?>
    <li class="tags__item tags__item-thematique">
      <a href="<?= url($page->url(), ['params' => ['thematique' => $thematique['name']]]) ?>">
        <?= html($thematique['name']) ?> (<?= $thematique['count'] ?>)
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>