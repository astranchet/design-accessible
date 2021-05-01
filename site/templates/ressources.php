<?php snippet('header') ?>

<div id="content">

  <div class="last__article">
    <div class="container">
      <h2 class="last__article-title">
        ✨ <b><?= $ressources->count() ?> ressources</b> sélectionnées avec amour.
      </h2>

      <?php snippet('filters') ?>

      <ul class="last__article-list">
        <?php foreach ($ressources as $ressource): ?>
          <li class="last__article-item">
            <article class="card card--horizontal">
              <?php snippet('ressource', ['ressource' => $ressource]) ?>
            </article>
          </li>
        <?php endforeach ?>
      </ul>

    </div>
  </div>

</div>
<?php snippet('footer') ?>
