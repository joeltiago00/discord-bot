<?php

namespace Bot\CoreDomain\Contracts\Repositories;

use Bot\CoreDomain\Contracts\Entity;

interface FindById
{
    public function findById(int|string $id): Entity;
}
