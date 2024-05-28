<?php

namespace Bot\CoreDomain\Infrastructure\Traits;

use Bot\CoreDomain\Infrastructure\Classes\Collection;

trait ToCollection
{
    protected function toCollection(array $items = []): Collection
    {
        return new Collection($items);
    }
}
