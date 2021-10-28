<?php

declare(strict_types=1);

namespace App\App\Admin\Controllers\Auth;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\HttpFoundation\Response;

final class LoginController
{
    use AuthenticatesUsers;

    public function __construct(
        private ResponseFactory $responseFactory,
        private UrlGenerator $urlGenerator,
    ) {
    }

    public function showLoginForm(): Response
    {
        return $this->responseFactory->view('admin.auth.login');
    }

    /**
     * @noinspection PhpUnusedPrivateMethodInspection
     *
     * @see \Illuminate\Foundation\Auth\RedirectsUsers::redirectPath()
     */
    private function redirectTo(): string
    {
        return $this->urlGenerator->route('home');
    }
}
