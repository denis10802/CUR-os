<?php

declare(strict_types=1);

namespace App\App\Admin\Controllers;

final class HomeController
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('welcome');
    }
}
