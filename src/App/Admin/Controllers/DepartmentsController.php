<?php

namespace App\App\Admin\Controllers;

use App\App\Admin\Requests\Department\StoreDepartmentRequest;
use App\Domain\Department\Actions\DepartmentService;
use App\Domain\Department\DataTransferObjects\CreateDepartmentDto;
use Illuminate\Contracts\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

final class DepartmentsController
{
    public function __construct(private ResponseFactory $responseFactory)
    {
    }

    public function index(DepartmentService $service): Response
    {
        $departments = $service->list();

        return $this->responseFactory->view('admin.departments.index', [
            'departments' => $departments,
        ]);
    }

    public function create(): Response
    {
        return $this->responseFactory->view('admin.departments.create');
    }

    public function store(
        StoreDepartmentRequest $request,
        DepartmentService $service,
    ): Response {
        $dto = new CreateDepartmentDto(
            $request->post('name'),
            $request->file('image')
        );
        $service->create($dto);

        return $this->responseFactory->redirectToRoute('departments.index');
    }
}
