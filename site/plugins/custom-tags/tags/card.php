<?php

return [
	'attr' => [
		'desc',
		'img',
        'alt',
      ],
    'html' => function($tag) {
    	$html = '<div class="card">';

    	$html .= '<strong class="card__title">' . kirbytextinline($tag->value) . '</strong> ';

    	if(isset($tag->desc)) {
	    	$html .= kirbytextinline($tag->desc);
    	}

    	if(isset($tag->img) && $tag->file = $tag->file($tag->img)) {
            // TODO : fix this publish thing
            $html .= Html::img($tag->file->publish()->url(), [
                'class'  => '',
                'alt'    => $tag->alt ?? ' '
            ]);
    	}

    	$html .= '</div>';

        return $html;
    }
];