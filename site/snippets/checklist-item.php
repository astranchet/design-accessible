<h4 class="card__title"><?= $item->title() ?></h4>
<p class="card__description"><?= $item->desc()->kirbytext() ?></p>

<?php if ($item->further()->isNotEmpty()): ?>
	<h5>Pour aller plus loin</h5>
	<p><?= $item->further()->kirbytext() ?></p>
<?php endif ?>
