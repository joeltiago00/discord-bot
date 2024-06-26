<?php

namespace App\Models;

use Bot\CoreDomain\Infrastructure\Traits\Entity\HasEntity;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model
{
    use HasApiTokens, HasEntity;

    protected $table = 'users';

    protected string $baseEntity = 'TransactionEntity::class';

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

    public function getHighlightAttribute()
    {
        return "<@{$this->discord_id}>";
    }
}
