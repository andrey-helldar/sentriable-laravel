<?php

namespace Helldar\Sentry;

use Helldar\Sentry\Console\Version;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

final class ServiceProvider extends BaseServiceProvider
{
    public function boot(): void
    {
        $this->commands([
            Version::class,
        ]);
    }
}
