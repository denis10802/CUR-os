<?php

namespace App\App\Admin\Controllers;

use App\App\Requests\StoreDepartmentRequest;
use App\Domain\Department\Actions\DepartmentService;
use App\Domain\Department\DataTransferObjects\CreateDepartmentDto;
use Illuminate\Support\Facades\Storage;

class DepartmentsController
{
    public function index(DepartmentService $service)
    {
        $departments = $service->list();

        return view('admin.departments.index',[
            'departments' => $departments
        ]);
    }

    public function create()
    {
        return view('admin.departments.create');
    }

    public function store(StoreDepartmentRequest $request, DepartmentService $service)
    {
        $request->validated();

        $image = $request->file('image')->store('departments');
        $dto = new CreateDepartmentDto($request->post('name'), $image);
        $service->create($dto);

        return redirect('/departments');
    }

}
