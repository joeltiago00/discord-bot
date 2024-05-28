<?php

namespace Bot\Shared;

use Bot\CoreDomain\AbstractDomain;
use Bot\Shared\Infrastructure\Providers\SharedServiceProvider;

class Domain extends AbstractDomain
{
    public function registerProvider(): array
    {
        return [
            SharedServiceProvider::class
        ];
    }
}
