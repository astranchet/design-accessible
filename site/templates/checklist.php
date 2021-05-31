<?php snippet('header') ?>

<div class="checklist" id="content">
    <div class="container">
		<?= $page->text()->kt() ?>

		<ul class="toc">
			<?php foreach ($page->categories()->toStructure() as $category): ?>
			<li><a href="<?= $page->url() ?>#<?= $category->title()->slug() ?>"><?= $category->title() ?></a></li>
			<?php endforeach ?>
		</ul>

		<?php foreach ($page->categories()->toStructure() as $category): ?>
			<h3 id="<?= $category->title()->slug() ?>"><?= $category->title() ?></h3>

			<?= $category->description()->kt() ?>
			<ul class="checklist__group">
			<?php foreach ($page->checklist()->toStructure()->filterBy('category', $category->title()) as $item): ?>
				<?php snippet('checklist-item', ['item' => $item]) ?>
			<?php endforeach ?>
			</ul>

			<p class="backtotop"><a href="#content">↑ Retourner en haut</a></p>
		<?php endforeach ?>




		<h2 class="last__article-title" id="further">
	        <span aria-hidden="true">✨</span> Pour aller plus loin
	    </h2>

		<ul class="last__article-list">
		<?php foreach ($page->ressources()->toStructure() as $ressource): ?>
			<li class="last__article-item">
				<article class="card card--horizontal">
					<h3 class="card__title">
  						<a href="<?= $ressource->url() ?>" hreflang="<?= $ressource->lang() ?>" lang="<?= $ressource->lang() ?>"><?= $ressource->title() ?></a>
					</h3>

					<div class="card__description">
						<?= $ressource->description()->kt() ?>
					</div>

					<p class="card__author">
						Par <span><?= $ressource->source() ?></span>
					</p>
				</article>
			</li>
		<?php endforeach ?>
		</ul>
  	</div>

    <div class="next-step">
    <div class="container">
      <?= $page->nextstep()->kt() ?>
    </div>
  </div>
</div>

<?php snippet('footer') ?>
