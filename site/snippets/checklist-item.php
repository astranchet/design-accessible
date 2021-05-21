<li class="checklist__item">
	<input type="checkbox" id="<?= $item->title()->slug() ?>">
	<label for="<?= $item->title()->slug() ?>">
		<span class="checklist__item__title"><?= $item->title() ?></span>
	</label>
	<div class="checklist__item__content">
		<?= $item->desc()->kirbytext() ?>
		<?php if ($item->further()->isNotEmpty()): ?>
			<p class="checklist__item__ressources">Ressources</p>
			<?= $item->further()->kirbytext() ?>
		<?php endif ?>
	</div>
</li>