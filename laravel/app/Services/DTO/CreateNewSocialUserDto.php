<?php

namespace App\Services\DTO;

use Illuminate\Support\Arr;
use Laravel\Socialite\Contracts\User;

class CreateNewSocialUserDto extends CreateNewUserDto {
    public static function createFromSocialUserContract(User $user, string $provider) : self {
        $partNames = explode(" ", $user->getName());
        return new self(
            Arr::get($partNames, 0),
            Arr::get($partNames, 1),
            $user->getEmail(),
            \App\Models\User::MALE,
            $provider,
            $user->getId()
        );
    }
}
