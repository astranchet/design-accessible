<?php

return [
	'attr' => [
		'desc',
		'img',
      ],
    'html' => function($tag) {
    	$html = '<div class="card">';

    	$html .= '<strong class="card__title">' . kirbytextinline($tag->value) . '</strong> ';

    	if(isset($tag->desc)) {
	    	$html .= kirbytextinline($tag->desc);
    	}

    	if(isset($tag->img)) {
    		// TODO insert image
	    	$html .= kirbytextinline($tag->img);
    	}

    	$html .= '</div>';

        return $html;
    }
];