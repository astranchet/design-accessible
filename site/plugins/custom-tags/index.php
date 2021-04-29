<?php

Kirby::plugin('your/plugin', [
    'tags' => [
        'card' => require_once __DIR__ . '/tags/card.php',
    ]
]);