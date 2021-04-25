<?php

return [
	'attr' => [
		'img',
      ],
    'html' => function($tag) {
    	// TODO insert image
        return '<div class="card">' . kirbytextinline($tag->value) . '</div>';
    }
];