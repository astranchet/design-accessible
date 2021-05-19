<li class="checklist-item">
	<label>
        <input type="checkbox" id="<?= $item->title()->slug() ?>">
        <span class="checklist-item__checkmark"></span>
        <h4 class="checklist-item__title"><?= $item->title() ?></h4>
	</label>
    <div class="checklist-item__content" style="display: none;">
		<p><?= $item->desc()->kirbytext() ?></p>
		<?php if ($item->further()->isNotEmpty()): ?>
			<h5>Pour aller plus loin</h5>
			<p><?= $item->further()->kirbytext() ?></p>
		<?php endif ?>
    </div>
</li>