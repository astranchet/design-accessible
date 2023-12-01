<?php if (!$is_filtered) { ?>
<nav class="filters" role="navigation" aria-label="Navigation par filtres">
<!--   <ul class="tags">
    <li>Par langue :</li>
    <?php foreach($langs as $id => $lang): ?>
    <li class="tags__item tags__item-lang">
      <a href="<?= url($page->url(), ['params' => ['lang' => $id]]) ?>">
        <?= html($lang) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul> -->
  
  <p>Par phase de conception :</p>
  <ul class="tags">
    <?php foreach($phases as $phase): ?>
    <li class="tags__item tags__item-phase">
      <a href="<?= url($page->url(), ['params' => ['phase' => $phase]]) ?>">
        <?= html($phase) ?>
      </a>
    </li>
    <?php endforeach ?>
  <ul>

  <p>Par thématique :</p>
  <ul class="tags">
    <?php foreach($page->tags()->toStructure() as $family): ?>
      <li class="tags__item tags__item-thematique"><a href="<?= url($page->url(), ['params' => ['family' => $family->name()]]) ?>">
        <?= html($family->name()) ?>
      </a></li>
    <?php endforeach ?>
  </ul>
</nav>
<?php } ?>

<!-- <?php if ($filter == "family") { ?>
  <p>Par thématique :</p>
  <ul class="tags">
    <?php foreach($page->tags()->toStructure() as $family): ?>
      <?php foreach($family->thematiques()->split(",") as $thematique): ?>
        <li class="tags__item tags__item-thematique">
          <a href="<?= url($page->url(), ['params' => ['thematique' => $thematique]]) ?>">
            <?= html($thematique) ?>
          </a>
        </li>
      <?php endforeach ?>
    <?php endforeach ?>
  </ul>
<?php } ?> -->
