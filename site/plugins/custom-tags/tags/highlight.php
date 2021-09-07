<?php

return [
    'html' => function($tag) {
        $html = Html::tag(
            'div',
            $tag->value,
            [
                'class' => 'highlight',
                'markdown' => '1',
            ],
        );

        return $html;
    }
];