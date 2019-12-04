<?php

namespace App\Http\Controllers;

use App\Services\DTO\CreateNewSocialUserDto;
use App\Services\UserService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Laravel\Socialite\Facades\Socialite;


class SocialAuthController extends Controller {
    /**
     * @var UserService
     */
    private $service;

    /**
     * SocialAuthController constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service) {
        $this->service = $service;
    }

    /**
     * @param string $provider
     * @return RedirectResponse
     */
    public function redirectToProvider(string $provider): RedirectResponse {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * @param string $provider
     * @return RedirectResponse
     */
    public function handleProviderCallback(string $provider): RedirectResponse {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo,$provider);
        auth()->login($user);

        return redirect(route('home'));

    }

    /**
     * @param $apiClient
     * @param $provider
     * @return mixed
     */
    function createUser( \Laravel\Socialite\Contracts\User $apiClient, string $provider) {
        $user = $this->service->findUser(
            $apiClient->getEmail(),
            function($query) use($apiClient) {
                /* @var Builder $query */
                $query
                    ->where('provider_id', $apiClient->getId())
                    ->orWhere('email', $apiClient->getEmail());
            });

        if (!$user)
            $user = $this->service->createNewUser(CreateNewSocialUserDto::createFromSocialUserContract($apiClient, $provider));

        return $user;
    }
}




