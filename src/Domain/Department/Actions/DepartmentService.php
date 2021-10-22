<?php

namespace App\Domain\Department\Actions;

use App\Domain\Department\DataTransferObjects\CreateDepartmentDto;
use App\Domain\Department\DataTransferObjects\DepartmentResponseDto;
use App\Domain\Department\Models\Department;
use Illuminate\Support\Facades\Storage;

class DepartmentService
{
    public function list(): \Illuminate\Support\Collection
    {
        return Department::all()->map(function (Department $department) {
            return new DepartmentResponseDto($department->name, $department->image_path, $department->id);
        });
    }

    public function create(CreateDepartmentDto $dto): Department
    {
        $department = new Department();
        $department->name = $dto->name;
        $department->image_path = (string) Storage::put('/departments', $dto->file);
        $department->save();

        return $department;
    }
}
