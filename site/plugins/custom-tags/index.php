<?php

Kirby::plugin('your/plugin', [
    'tags' => [
        'card' => require_once __DIR__ . '/tags/card.php',
        'highlight' => require_once __DIR__ . '/tags/highlight.php',
        'link' => require_once __DIR__ . '/tags/link.php',
        'emoji' => require_once __DIR__ . '/tags/emoji.php',
    ]
]);