<?php

declare(strict_types=1);

namespace App\App\Admin\Controllers;

use App\Domain\Department\Actions\DepartmentService;
use App\Domain\Department\DataTransferObjects\DepartmentResponseDto;
use App\Domain\Department\Models\Department;
use Illuminate\Support\Facades\DB;

final class HomeController
{
    public function users(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        return view('admin.users');
    }
}
