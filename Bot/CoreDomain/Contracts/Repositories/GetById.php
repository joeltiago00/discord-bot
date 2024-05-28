<?php

namespace Bot\CoreDomain\Contracts\Repositories;

use Bot\CoreDomain\Contracts\Entity;

interface GetById
{
    public function getById(int|string $id): ?Entity;
}
