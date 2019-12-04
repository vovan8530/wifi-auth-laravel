<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Services\DTO\CreateNewUserDto;
use App\Services\UserService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class RegisterController extends Controller {
    /**
     * @var UserService
     */
    private $service;

    /**
     * RegisterController constructor.
     * @param UserService $service
     */
    public function __construct(UserService $service) {
        $this->service = $service;
    }

    /**
     * @return View
     */
    public function index(): View {
        return view('register.login');
    }

    /**
     * @param AuthRequest $authRequest
     * @return RedirectResponse
     */
    public function createUser(AuthRequest $authRequest): RedirectResponse {
        $dto = CreateNewUserDto::createFromArray($authRequest->all());

        $user = $this->service->findUser($dto->email);
        if(!$user)
            $user = $this->service->createNewUser($dto);

        Auth::login($user);

        return redirect(route('home'));
    }
}
