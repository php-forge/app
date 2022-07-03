<?php

declare(strict_types=1);

use Forge\App\Action\HomeAction;
use Yiisoft\Router\Route;

return [
    Route::get('/')->action([HomeAction::class, 'run'])->name('home'),
];
