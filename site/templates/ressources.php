<?php snippet('header') ?>

<div id="content">

  <div class="last__article">
    <div class="container">
      <h2 class="last__article-title">
        <span aria-hidden="true">📦</span> <?= $ressources_title ?>
      </h2>

      <?php snippet('filters') ?>

      <?php if (!$is_filtered) { ?>
        <h3>🤩 Les toutes dernières ressources</h3>
      <?php } ?>

      <ul class="last__article-list">
        <?php foreach ($ressources as $ressource): ?>
          <li class="last__article-item">
            <?php snippet('ressource', ['ressource' => $ressource]) ?>
          </li>
        <?php endforeach ?>
      </ul>

      <p>
        <a href="<?= page('ressources')->url() ?>" class="button button--primary">
        <?php if ($is_filtered) { ?>← <?php } ?>Voir toutes les ressources
        </a>
      </p>

      <p class="page-detail">Dernière mise à jour le <b><?= $page->ressources()->toStructure()->sortBy('date', 'desc')->first()->date()->toDate('d/m/Y') ?></b>.</p>

    </div>
  </div>

</div>
<?php snippet('footer') ?>
