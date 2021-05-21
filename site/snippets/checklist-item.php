<li class="checklist__item">
	<label>
        <input type="checkbox" id="<?= $item->title()->slug() ?>">
        <span class="checklist__item__checkmark"></span>
        <h4 class="checklist__item__title"><?= $item->title() ?></h4>
	</label>
    <div class="checklist__item__content">
		<?= $item->desc()->kirbytext() ?>
		<?php if ($item->further()->isNotEmpty()): ?>
			<h5>Ressources</h5>
			<?= $item->further()->kirbytext() ?>
		<?php endif ?>
    </div>
</li>