<?php

namespace Bot\User\Infrastructure\Repositories;

use Bot\Shared\Infrastructure\Repositories\BaseRepository;
use Bot\User\Domain\Repositories\UserRepository;
use Bot\User\Infrastructure\Models\User as UserModel;

class UserEloquentRepository extends BaseRepository implements UserRepository
{
    protected string $model = UserModel::class;

}
