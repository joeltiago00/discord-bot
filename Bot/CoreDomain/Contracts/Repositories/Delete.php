<?php

namespace Bot\CoreDomain\Contracts\Repositories;

interface Delete
{
    public function deleteId(int|string $id): bool;
}
