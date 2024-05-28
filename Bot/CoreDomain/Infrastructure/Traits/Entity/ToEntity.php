<?php

namespace Bot\CoreDomain\Infrastructure\Traits\Entity;

use Illuminate\Database\Eloquent\Model;
use Bot\CoreDomain\Contracts\Entity;

trait ToEntity
{
    public function toEntity(Model $model): Entity
    {
        return $this->baseEntity::makeFromArray($model->toArray());
    }
}
