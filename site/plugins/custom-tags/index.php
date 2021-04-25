<?php

// Kirby::plugin('plop', [
//     // 'tags' => [
//     //     'card' => require_once __DIR__ . '/tags/card.php'
//     // ]
// ]);

$originalTag = Kirby\Text\KirbyTag::$types['image'];
Kirby::plugin('your/plugin', [
    'tags' => [
        'card-persona' => require_once __DIR__ . '/tags/card-persona.php',
        'card-handicap' => require_once __DIR__ . '/tags/card-handicap.php',
        'card-aide' => require_once __DIR__ . '/tags/card-aide.php'
    ]
]);