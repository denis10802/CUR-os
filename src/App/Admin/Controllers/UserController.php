<?php

namespace App\App\Admin\Controllers;

use App\App\Admin\Requests\User\StoreUserRequest;
use App\Domain\Department\Actions\DepartmentService;
use App\Domain\User\Actions\UserService;
use App\Domain\User\DataTransferObjects\CreateUserDto;
use Illuminate\Routing\ResponseFactory;
use Symfony\Component\HttpFoundation\Response;

class UserController
{
    public function __construct(private ResponseFactory $responseFactory)
    {
    }

    /**
     * @param UserService $userService
     * @return Response
     */
    public function index(UserService $userService): Response
    {
        $users = $userService->list();

        return $this->responseFactory->view('admin.users.index', [
            'users' => $users
        ]);
    }

    /**
     * @param DepartmentService $departmentService
     * @return Response
     */
    public function create(DepartmentService $departmentService): Response
    {
        $departments = $departmentService->list();

        return $this->responseFactory->view('admin.users.create', [
            'departments' => $departments
        ]);
    }

    /**
     * @param StoreUserRequest $userRequest
     * @param UserService $userService
     * @return Response
     */
    public function store(
        StoreUserRequest $userRequest,
        UserService      $userService
    ): Response
    {

        $user = new CreateUserDto(
            $userRequest->post('firstName'),
            $userRequest->post('lastName'),
            $userRequest->post('email'),
            $userRequest->post('password'),
            (int)$userRequest->post('departmentId'),
        );
        $userService->create($userDto);

        return $this->responseFactory->redirectToRoute('user.index');
    }

}
