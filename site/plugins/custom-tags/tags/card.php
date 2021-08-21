<?php

return [
    'attr' => [
        'desc',
        'img',
        'icon',
        'alt',
    ],
    'html' => function($tag) {
        $descContainer = '';
        $imgContainer = '';
        $iconContainer = '';
        
        // Title
        $htmlTitle = Html::tag(
            'p',
            [kirbytextinline($tag->value)],
            [
                'class' => 'card__title',
            ],
        );
        
        // Description
        if(isset($tag->desc)) {
            $descContainer = kirbytext($tag->desc);
        }
        
        // Image or Icon
        if(isset($tag->img) && $tag->file = $tag->file($tag->img)) {
            // TODO : fix this publish thing
            $htmlImg = Html::img(
                $tag->file->publish()->url(),
                [
                    'alt' => $tag->alt ?? ' ',
                ],
            );
            
            $imgContainer = Html::tag(
                'p',
                [$htmlImg],
                [
                    'class' => 'card__img',
                ],
            );
        } else if(isset($tag->icon)) {
            $htmlIcon = Html::tag(
                'span',
                '',
                [
                    'class'         => 'iconify',
                    'data-inline'   => false,
                    'data-icon'     => $tag->icon,
                ],
            );
            
            $iconContainer = Html::tag(
                'p',
                [$htmlIcon],
                [
                    'class' => 'card__icon',
                ],
            );
        }
        
        // Card block with nested content
        $html = Html::tag(
            'div',
            [
                $htmlTitle,
                $descContainer,
                $imgContainer,
                $iconContainer,
            ],
            [
                'class' => 'card',
            ],
        );
        
        return $html;
    }
];