<?php snippet('header') ?>

<div id="content" class="default <?= $page->slug(); ?>">
	<?php foreach ($page->sections()->toStructure() as $section): ?>
     	<div class="section <?= $section->style()->or("") ?>">
	    	<div class="container">
            	<?= $section->text()->kt() ?>
          	</div>
        </div>
    <?php endforeach ?>

	<?php if ($page->text()->isNotEmpty()) { ?>
    	<div class="container">
			<?= $page->text()->kt() ?>

			<?php if ($page->ressources()->isNotEmpty()) { ?>
				<h2 class="last__article-title" id="further">
			    Pour aller plus loin
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
			<?php } ?>

		</div>
	<?php } ?>

</div>

<?php snippet('footer') ?>
