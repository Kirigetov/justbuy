<?php

require_once 'config.php';
require_once __DIR__ . '/../plugins/crm-proxy/Proxy.php';

$settings = [
    'ofApiKey'    => $config['widgets']['widgetsApiKey'],
    'trackApiKey' => $config['track']['trackApiKey'],
    'urlAliases' => [
        '@form' => '/order'
    ]
];

if (!empty($config['track']['settings'])) {
    $settings = array_merge($settings, $config['track']['settings']);
}

(new \crm\middleware\Proxy())
    ->setSettings($settings)
    ->run();
