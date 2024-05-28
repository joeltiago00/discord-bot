<?php

namespace Bot\User;

use Bot\CoreDomain\AbstractDomain;
use Bot\User\Infrastructure\Providers\UserRouteServiceProvider;
use Bot\User\Infrastructure\Providers\UserServiceProvider;

class Domain extends AbstractDomain
{
    public function registerProvider(): array
    {
        return [
            UserServiceProvider::class,
            UserRouteServiceProvider::class
        ];
    }
}
