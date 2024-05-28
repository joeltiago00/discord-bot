<?php

namespace Bot\User\Domain\DTO;

use Bot\Shared\Domain\DTO\BaseDTO;

class UserDTO extends BaseDTO
{
    public function __construct(
        public string  $nick,
        public string  $lastName,
        public string  $email,
        public string  $password,
        public int     $typeId,
        public int     $statusId,
    ) {
    }
}
