<?php

return [
	'attr' => [
		'class',
      ],
    'html' => function($tag) {
    	$html = '<div class="'.$tag->class.'">';
    	$html .= kirbytext($tag->value);
    	$html .= '</div>';

        return $html;
    }
];