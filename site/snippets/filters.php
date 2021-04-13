<nav>
  <ul>
    <?php foreach($phases as $phase): ?>
    <li>
      <a href="<?= url($page->url(), ['params' => ['phase' => $phase]]) ?>">
        <?= html($phase) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <ul>
    <?php foreach($langs as $id => $lang): ?>
    <li>
      <a href="<?= url($page->url(), ['params' => ['lang' => $id]]) ?>">
        <?= html($lang) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
  <ul>
    <?php foreach($thematiques as $thematique): ?>
    <li>
      <a href="<?= url($page->url(), ['params' => ['thematique' => $thematique['name']]]) ?>">
        <?= html($thematique['name']) ?> (<?= $thematique['count'] ?>)
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>