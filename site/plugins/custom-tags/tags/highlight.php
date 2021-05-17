<?php

return [
    'html' => function($tag) {
    	$html = '<div class="highlight">';
    	$html .= kirbytext($tag->value);
    	$html .= '</div>';

        return $html;
    }
];