<?php

namespace Bot\CoreDomain\Contracts\Repositories;

use Bot\Shared\Domain\Entities\BaseEntity;

interface Update
{
    public function update(BaseEntity $entity): bool;
}
