<?php

return [
    'html' => function($tag) {
        $html = Html::tag(
            'span',
            $tag->value,
            [
                'aria-hidden' => 'true',
            ],
        );
        return $html;
    }
];