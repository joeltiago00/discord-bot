<?php

namespace Bot\User\Infrastructure\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Bot\CoreDomain\Infrastructure\Traits\Entity\HasEntity;
use Bot\User\Domain\Entities\User as UserEntity;

class User extends Model
{
    use SoftDeletes, HasEntity;

    protected $table = 'users';

    protected string $baseEntity = UserEntity::class;

    protected $fillable = [
        'username',
        'discord_id',
        'is_admin',
        'status',
        'nick'
    ];

    protected $casts = [
        'is_admin' => 'boolean',
    ];

    public function getHighlightAttribute(): string
    {
        return "<@{$this->discord_id}>";
    }
}
