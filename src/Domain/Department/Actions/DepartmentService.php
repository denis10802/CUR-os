<?php

namespace App\Domain\Department\Actions;

use App\Domain\Department\DataTransferObjects\DepartmentResponseDto;
use App\Domain\Department\DataTransferObjects\CreateDepartmentDto;
use App\Domain\Department\Models\Department;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;


class DepartmentService
{

    public function list()
    {
       return Department::all()->map(function (Department $department) {
           return new DepartmentResponseDto($department->name, $department->image_path);
        });
    }

    public function create(CreateDepartmentDto $dto): Department
    {
        $department = new Department();
        $department->name = $dto->name;
        $department->image_path = $dto->file->store('departments');
        $department->save();

        return $department;
    }
}
