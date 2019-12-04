<?php

namespace App\Services\DTO;

use Illuminate\Support\Arr;

class CreateNewUserDto {
    /**
     * @var string
     */
    public $firstName;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $gender;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $providerClientId;

    /**
     * CreateNewUserDto constructor.
     *
     * @param string $firstName
     * @param string $lastName
     * @param string $email
     * @param string $gender
     * @param string $provider
     * @param string $providerClientId
     */
    public function __construct(string $firstName,
                                string $lastName,
                                string $email,
                                string $gender,
                                string $provider = '',
                                string $providerClientId = '') {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->gender = $gender;
        $this->provider = $provider;
        $this->providerClientId = $providerClientId;
    }

    public function toArray() : array {
        return [
            'first_name' => $this->firstName,
            'second_name' => $this->lastName,
            'email' => $this->email,
            'gender' => $this->gender,
            'provider' => $this->provider,
            'provider_id' => $this->providerClientId,
        ];
    }

    public static function createFromArray(array $attributes = []) : self {
        return new self(
            Arr::get($attributes, 'first_name', ''),
            Arr::get($attributes, 'second_name', ''),
            Arr::get($attributes, 'email', ''),
            Arr::get($attributes, 'gender', ''),
            '',
            ''
        );
    }
}
