<?php

return [
	'attr' => [
		'desc',
		'img',
        'alt',
      ],
    'html' => function($tag) {
    	$html = '<div class="card">';

    	$html .= '<p class="card__title">' . kirbytextinline($tag->value) . '</p> ';

    	if(isset($tag->desc)) {
	    	$html .= kirbytext($tag->desc);
    	}

    	if(isset($tag->img) && $tag->file = $tag->file($tag->img)) {
            $html .= '<p class="card__img">';
            // TODO : fix this publish thing
            $html .= Html::img($tag->file->publish()->url(), [
                'class'  => '',
                'alt'    => $tag->alt ?? ' '
            ]);
            $html .= '</p>';
    	}

    	$html .= '</div>';

        return $html;
    }
];