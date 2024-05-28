<?php

namespace Bot\Shared\Infrastructure\Repositories;

use Illuminate\Database\Eloquent\Model;
use Bot\CoreDomain\Contracts\Entity;
use Bot\CoreDomain\Contracts\Repositories\Delete;
use Bot\CoreDomain\Contracts\Repositories\FindById;
use Bot\CoreDomain\Contracts\Repositories\GetById;
use Bot\CoreDomain\Contracts\Repositories\Store;
use Bot\CoreDomain\Contracts\Repositories\Update;
use Bot\Shared\Domain\DTO\BaseDTO;
use Bot\Shared\Domain\Entities\BaseEntity;

class BaseRepository implements Store, Update, Delete, FindById, GetById
{
    protected string $model;

    public function deleteId(int|string $id): bool
    {
        return $this->getModel()
            ->newQuery()
            ->where('id', $id)
            ->delete();
    }

    public function findById(int|string $id, array $relationships = []): Entity
    {
        $model = $this->getModel()
            ->newQuery()
            ->with($relationships)
            ->find($id);

        return $this->getModel()->toEntity($model);
    }

    public function getById(int|string $id): ?Entity
    {
        $model = $this->getModel()
            ->newQuery()
            ->firstWhere('id', $id);

        if (!$model) {
            return null;
        }

        return $this->getModel()->toEntity($model);
    }

    public function store(BaseDTO $dto): Entity
    {
        $model = $this->getModel()
            ->newQuery()
            ->create($dto->toArray());

        return $this->getModel()->toEntity($model);
    }

    public function update(BaseEntity $entity): bool
    {
        return $this->getModel()
            ->newQuery()
            ->where('id', $entity->id)
            ->update($entity->toArray());
    }

    protected function getModel(): Model
    {
        return app($this->model);
    }
}
