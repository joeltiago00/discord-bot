<?php

namespace Bot\CoreDomain\Infrastructure\Classes;

use Illuminate\Support\Collection as SupportCollection;

class Collection extends SupportCollection
{
    public function __construct($items)
    {
        parent::__construct($items);
    }
}
