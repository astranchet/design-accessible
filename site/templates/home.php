<?php snippet('header') ?>

<div class="homepage" id="content">
  <?php if ($page->isHomePage()): ?>
    <?php $quote = $page->quotes()->toStructure()->shuffle()->first(); ?>
    <div class="quote">
      <div class="container">
        <blockquote class="blockquote">
          <div class="blockquote__citation">
            <?= $quote->citation()->kt() ?>
          </div>
          <?php if ($quote->source()->isNotEmpty()): ?>
            <p class="blockquote__author">
              – Source&nbsp;: <?= $quote->source()->kirbytextinline() ?>
            </p>
          <?php endif ?>
        </blockquote>
      </div>
    </div>
  <?php endif ?>

  <div class="intro">
    <div class="container">
      <h2 class="intro__title">Par où commencer ?</h2>
      <p>L’accessibilité commence dès la phase de conception.</p>

      <ul class="list__link">
        <?php foreach ($page->getting_started()->toStructure()->limit(3) as $ressource): ?>
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
        <b>Les dernières ressources</b> sélectionnées avec amour
      </h2>

      <ul class="last__article-list">
        <?php foreach ($ressources->limit(10) as $ressource): ?>
          <li class="last__article-item">
            <article class="card card--horizontal">
              <?php snippet('ressource', ['ressource' => $ressource]) ?>
            </article>
          </li>
        <?php endforeach ?>
      </ul>

      <a href="<?= page('ressources')->url() ?>" class="button button--primary">
        Voir toutes les ressources <span role="img" aria-label="xxx">👉</span>
      </a>
    </div>
  </div>

  <div class="suscribe" id="suscribe">
    <div class="container">
      <p><?= $page->suscribe()->kt() ?></p>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
