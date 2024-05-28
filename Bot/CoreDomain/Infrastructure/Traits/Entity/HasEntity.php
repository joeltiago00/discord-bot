<?php

namespace Bot\CoreDomain\Infrastructure\Traits\Entity;

trait HasEntity
{
    use ToEntity, ToEntityCollection;

    public function getEntity(): string
    {
        return $this->baseEntity;
    }
}
