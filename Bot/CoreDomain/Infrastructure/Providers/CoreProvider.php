<?php

namespace Bot\CoreDomain\Infrastructure\Providers;

use Illuminate\Support\ServiceProvider;
use Bot\CoreDomain\Core\DomainManager;

class CoreProvider extends ServiceProvider
{
    public function register(): void
    {
        $providers = DomainManager::instance()->getproviders();
        foreach ($providers as $provider) {
            $this->app->register($provider);
        }
    }
}
