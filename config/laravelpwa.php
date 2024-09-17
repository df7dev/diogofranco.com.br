<?php

return [
    'name' => 'DiogoFranco',
    'manifest' => [
        'name' => env('APP_NAME', 'Diogo Franco'),
        'short_name' => 'DF',
        'start_url' => '127.0.0.1:8777',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation'=> 'any',
        'status_bar'=> 'black',
        'icons' => [
            '72x72' => [
                'path' => '/build/images/icons/icon-72x72.png',
                'purpose' => 'any'
            ],
            '96x96' => [
                'path' => '/build/images/icons/icon-96x96.png',
                'purpose' => 'any'
            ],
            '128x128' => [
                'path' => '/build/images/icons/icon-128x128.png',
                'purpose' => 'any'
            ],
            '144x144' => [
                'path' => '/build/images/icons/icon-144x144.png',
                'purpose' => 'any'
            ],
            '152x152' => [
                'path' => '/build/images/icons/icon-152x152.png',
                'purpose' => 'any'
            ],
            '192x192' => [
                'path' => '/build/images/icons/icon-192x192.png',
                'purpose' => 'any'
            ],
            '384x384' => [
                'path' => '/build/images/icons/icon-384x384.png',
                'purpose' => 'any'
            ],
            '512x512' => [
                'path' => '/build/images/icons/icon-512x512.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/build/images/icons/splash-640x1136.png',
            '750x1334' => '/build/images/icons/splash-750x1334.png',
            '828x1792' => '/build/images/icons/splash-828x1792.png',
            '1125x2436' => '/build/images/icons/splash-1125x2436.png',
            '1242x2208' => '/build/images/icons/splash-1242x2208.png',
            '1242x2688' => '/build/images/icons/splash-1242x2688.png',
            '1536x2048' => '/build/images/icons/splash-1536x2048.png',
            '1668x2224' => '/build/images/icons/splash-1668x2224.png',
            '1668x2388' => '/build/images/icons/splash-1668x2388.png',
            '2048x2732' => '/build/images/icons/splash-2048x2732.png',
        ],
        'shortcuts' => [
            [
                'name' => 'Shortcut Link 1',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => "/build/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Shortcut Link 2',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]
];
