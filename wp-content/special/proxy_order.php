<?php

require_once 'config.php';
require_once __DIR__ . '/../plugins/crm-proxy/Proxy.php';

$settings = [
    'ofApiKey'    => $config['widgets']['widgetsApiKey'],
    'trackApiKey' => $config['track']['trackApiKey'],
    'urlAliases' => [
        '@form' => '/order',
        '@preview' => '/preview',
        '@terms' => '/terms',
        '@prices' => '/prices'
    ]
];

if (!empty($config['widgets']['settings'])) {
    $settings = array_merge($settings, $config['widgets']['settings']);
}

(new \crm\middleware\Proxy())
    ->setSettings($settings)
    ->run();
