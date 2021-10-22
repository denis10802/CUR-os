<?php

namespace App\Domain\Department\Models;

use Database\Factories\DepartmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\Department\Models\Department.
 *
 * @property int                             $id
 * @property string                          $name
 * @property string                          $image_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 *
 * @method static \Database\Factories\DepartmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Department extends Model
{
    use HasFactory;

    protected static function newFactory(): DepartmentFactory
    {
        return DepartmentFactory::new();
    }
}
