<?php

return [
	'attr' => [
		'desc',
      ],
    'html' => function($tag) {
        return '<div class="card"><strong class="card__title">' . kirbytextinline($tag->value) . '</strong> ' . kirbytextinline($tag->desc) . '</div>';
    }
];