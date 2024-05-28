<?php

namespace Bot\User\Domain\Entities;

use Illuminate\Support\Carbon;
use Bot\Shared\Domain\Entities\BaseEntity;

class User extends BaseEntity
{
    public function __construct(
        public readonly int $id,
        public string       $nick,
        public string       $username,
        public string       $discordId,
        public bool         $isAdmin,
        public string       $status,
        public ?Carbon      $createdAt,
        public ?Carbon      $updatedAt,
        public ?Carbon      $deletedAt,
    )
    {
    }

    public static function makeFromArray(array $data): self
    {
        return new self(
            $data['id'],
            $data['nick'],
            $data['username'] ?? null,
            $data['discord_id'],
            $data['is_admin'],
            $data['status'],
            Carbon::parse($data['created_at']),
            Carbon::parse($data['updated_at']),
            empty($data['deleted_at']) ? null : Carbon::parse($data['deleted_at']),
        );
    }
}
