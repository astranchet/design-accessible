<?php snippet('header') ?>

<div class="homepage" id="content">
  <?php $quote = $site->quotes()->toStructure()->filterBy('show', 'true')->shuffle()->first(); ?>
  <div class="quote">
    <div class="container">
      <blockquote class="blockquote">
        <div class="blockquote__citation">
          <?= $quote->citation()->kt() ?>
        </div>
        <?php if ($quote->source()->isNotEmpty()): ?>
          <p class="blockquote__author"><?= $quote->source()->kirbytextinline() ?></p>
        <?php endif ?>
      </blockquote>
    </div>
  </div>

  <div class="intro">
    <div class="container">
      <ul class="list__link">
        <?php foreach ($site->gettingStarted()->toStructure() as $ressource): ?>
          <li>
            <a href="<?= $ressource->url() ?>" class="link__big">
              <h3 class="list__link-title">
                <?= $ressource->title() ?>
              </h3>
              <p><?= $ressource->desc() ?></p>
            </a>
          </li>
        <?php endforeach ?>
      </ul>
    </div>
  </div>

  <div class="last__article">
    <div class="container">
      <h2 class="last__article-title">
        ✨ <b>Les dernières ressources</b> sélectionnées avec amour
      </h2>

      <ul class="last__article-list">
        <?php foreach ($ressources->limit(4) as $ressource): ?>
          <li class="last__article-item">
            <?php snippet('ressource', ['ressource' => $ressource]) ?>
          </li>
        <?php endforeach ?>
      </ul>

      <div class="last__article-action">
        <a href="<?= page('ressources')->url() ?>" class="button button--primary">
          Explorer les ressources →
        </a>
      </div>
    </div>
  </div>

  <div class="next-step">
    <div class="container">
      <?= $site->nextstep()->kt() ?>
    </div>
  </div>

  <?php snippet('suscribe') ?>

</div>

<?php snippet('footer') ?>
