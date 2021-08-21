<?php

$originalTag = Kirby\Text\KirbyTag::$types['link'];
return [
    'attr' => array_merge($originalTag['attr'], ['hreflang']),
    'html' => function($tag) {
        if (empty($tag->lang) === false) {
            $tag->value = Url::to($tag->value, $tag->lang);
        } else {
            $tag->lang = $tag->hreflang;
        }

        $html = Html::a(
            $tag->value,
            $tag->text,
            [
                'hreflang'  => $tag->hreflang,
                'lang'      => $tag->lang,
                'rel'       => $tag->rel,
                'class'     => $tag->class,
                'role'      => $tag->role,
                'title'     => $tag->title,
                'target'    => $tag->target,
            ],
        );
        
        return $html;
    }
];