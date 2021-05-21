<li class="checklist__item">
	<h4><label class="checklist__item__title">
        <?= $item->title() ?>
        <input type="checkbox" id="<?= $item->title()->slug() ?>">
        <span class="checklist__item__checkmark"></span>
	</label></h4>
        
    <div class="checklist__item__content">
		<?= $item->desc()->kirbytext() ?>
		<?php if ($item->further()->isNotEmpty()): ?>
			<h5>Ressources</h5>
			<?= $item->further()->kirbytext() ?>
		<?php endif ?>
    </div>
</li>