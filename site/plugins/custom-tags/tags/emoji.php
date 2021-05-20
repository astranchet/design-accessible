<?php

return [
    'html' => function($tag) {
    	$html = '<span aria-hidden="true">';
    	$html .= $tag->value;
    	$html .= '</span>';

        return $html;
    }
];