<?php

namespace Bot\CoreDomain\Contracts\Repositories;

use Bot\CoreDomain\Contracts\Entity;
use Bot\Shared\Domain\DTO\BaseDTO;

interface Store
{
    public function store(BaseDTO $dto): Entity;
}
