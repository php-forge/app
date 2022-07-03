<?php

declare(strict_types=1);

use Forge\App\Command\HelloCommand;
use Yiisoft\ErrorHandler\Middleware\ErrorCatcher;
use Yiisoft\Router\Middleware\Router;
use Yiisoft\Session\SessionMiddleware;

return [
    'middlewares' => [
        ErrorCatcher::class,
        SessionMiddleware::class,
        Router::class,
    ],

    'yiisoft/aliases' => [
        'aliases' => [
            '@root' => dirname(__DIR__),
            '@assets' => '@root/public/assets',
            '@assetsUrl' => '/assets',
            '@npm' => '@root/node_modules',
            '@public' => '@root/public',
            '@resources' => '@root/resources',
            '@runtime' => '@root/runtime',
            '@translations' => '@root/storage/translations',
            '@vendor' => '@root/vendor',
            '@widget' => '@root/config/widget',
        ],
    ],

    'yiisoft/yii-console' => [
        'commands' => [
            'hello' => HelloCommand::class,
        ],
    ],
];
