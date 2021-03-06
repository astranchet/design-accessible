<?php snippet('header') ?>

<div id="content">

  <div class="last__article">
    <div class="container">
      <h2 class="last__article-title">
        ✨ <?= $ressources_title ?>
      </h2>

      <?php if (!$ressources_is_filtered) { ?>
      <?php snippet('filters') ?>
      <?php } ?>

      <ul class="last__article-list">
        <?php foreach ($ressources as $ressource): ?>
          <li class="last__article-item">
            <?php snippet('ressource', ['ressource' => $ressource]) ?>
          </li>
        <?php endforeach ?>
      </ul>

      <?php if ($ressources_is_filtered) { ?>
        <p><a href="<?= page('ressources')->url() ?>" class="button button--primary">
          ← Voir toutes les ressources
        </a></p>
      <?php } ?>

    </div>
  </div>

</div>
<?php snippet('footer') ?>
