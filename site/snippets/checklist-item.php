<li class="checklist__item">
	<label>
        <input type="checkbox" id="<?= $item->title()->slug() ?>">
        <span class="checklist__item__checkmark"></span>
        <h4 class="checklist__item__title"><?= $item->title() ?></h4>
		<!-- <span class="iconify" data-inline="false" data-icon="ion:caret-up" style="color: #01a58e; font-size: 2.4rem; float: right;"></span> -->
	</label>
	<!-- TODO display none if checked -->
    <div class="checklist__item__content" style="// display: none;">
		<p><?= $item->desc()->kirbytext() ?></p>
		<?php if ($item->further()->isNotEmpty()): ?>
			<h5>Ressources</h5>
			<p><?= $item->further()->kirbytext() ?></p>
		<?php endif ?>
    </div>
</li>