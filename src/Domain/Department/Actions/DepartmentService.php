<?php

namespace App\Domain\Department\Actions;

use App\Domain\Department\DataTransferObjects\DepartmentResponseDto;
use App\Domain\Department\DataTransferObjects\CreateDepartmentDto;
use App\Domain\Department\Models\Department;


class DepartmentService
{
    public function list(): array|\Illuminate\Database\Eloquent\Collection|\Illuminate\Support\Collection
    {
       return Department::all()->map(function (Department $department) {
           return new DepartmentResponseDto($department->name, $department->image_path);
        });
    }

    public function create(CreateDepartmentDto $dto): Department
    {
        $department = new Department();
        $department->name = $dto->name;
        $department->image_path = $dto->image_path;
        $department->save();

        return $department;
    }
}
