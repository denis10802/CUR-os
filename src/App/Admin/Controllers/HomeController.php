<?php

declare(strict_types=1);

namespace App\App\Admin\Controllers;

use Illuminate\Contracts\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

final class HomeController
{
    public function __construct(private ResponseFactory $responseFactory)
    {
    }

    public function __invoke(): Response
    {
        return $this->responseFactory->view('admin.home');
    }
}
