<?php

declare(strict_types=1);

use Rector\Laravel\Set\LaravelSetList;
use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([
        LaravelSetList::LARAVEL_90
    ]);
};


