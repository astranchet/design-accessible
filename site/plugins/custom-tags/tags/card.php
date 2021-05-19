<?php

return [
	'attr' => [
		'desc',
		'img',
        'icon',
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
    	} else if(isset($tag->icon)) {
            $html .= '<p class="card__icon">';
            $html .= Html::tag('span', null, [
                'class'         => 'iconify',
                'data-inline'   => false,
                'data-icon'     => $tag->icon,
            ]);
            $html .= '</p>';
        }

    	$html .= '</div>';

        return $html;
    }
];