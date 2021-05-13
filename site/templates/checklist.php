<?php snippet('header') ?>

<div id="content">
    <div class="container">
		<?= $page->text()->kt() ?>

		<?php foreach ($page->categories()->toStructure() as $category): ?>
			<h3><?= $category->title() ?></h3>

			<ul class="last__article-list">
			<?php foreach ($page->checklist()->toStructure()->filterBy('category', $category->title()) as $item): ?>
				<li class="last__article-item">
    		        <article class="card card--horizontal">
						<?php snippet('checklist-item', ['item' => $item]) ?>
		            </article>
          		</li>
			<?php endforeach ?>
			</ul>
		<?php endforeach ?>




		<h2 class="last__article-title">
	        ✨ Pour aller plus loin
	    </h2>

		<ul class="last__article-list">
		<?php foreach ($page->ressources()->toStructure() as $ressource): ?>
			<li class="last__article-item">
				<article class="card card--horizontal">
					<h3 class="card__title">
  						<a href="<?= $ressource->url() ?>"><?= $ressource->title() ?></a>
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

  <div class="next-step">
    <div class="container">
      <p><?= $page->nextstep()->kt() ?></p>
    </div>
  </div>

  	</div>	
</div>

<?php snippet('footer') ?>
