<?php

return [
	'attr' => [
		'img',
      ],
    'html' => function($tag) {
    	// TODO insert image
        return '<div class="card"><strong class="card__title">' . kirbytextinline($tag->value) . '</strong></div>';
    }
];