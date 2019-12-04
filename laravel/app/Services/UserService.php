<?php

namespace App\Services;

use App\Models\User;
use App\Services\DTO\CreateNewUserDto;

class UserService {

    /**
     * @param CreateNewUserDto $dto
     * @return mixed
     */
    public function createNewUser(CreateNewUserDto $dto) : User {
        /* @var User $user */
        $user = User::create($dto->toArray());
        return $user;
    }

    /**
     * @param string $email
     * @param \Closure|null $criteria
     * @return User
     */
    public function findUser(string $email, \Closure $criteria = null) {
        $query = User::query();

        if($criteria)
            $criteria($query);
        else
            $query->where('email', '=', $email);

        /* @var User $user */
        $user = $query->first();
        return $user;
    }

    /**
     * @param $data
     * @return mixed
     */
    public function SaveUser(object $data, string $provider=''): User
    {
        $user = User::where('provider_id', $data->id)
            ->orWhere('email', $data->email)
            ->first();
        if (!$user) {
            $user = User::create([
                'first_name'     => $data->first_name,
                'second_name'     => $data->second_name,
                'email'    => $data->email,
                'gender'    => $data->gender,
                'provider' => $provider ? $provider:'',
                'provider_id' => $data->id ? $data->id:'',
            ]);
        }
        return $user;

    }

}
