<?php

namespace App\Domain\User\Models;

use App\Domain\Department\Models\Department;
use Database\Factories\UserDepartmentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Domain\User\Models\UserDepartment
 *
 * @property int $user_id
 * @property int $department_id
 * @property-read Department $department
 * @method static \Database\Factories\DepartmentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDepartment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDepartment query()
 * @mixin \Eloquent
 */
class UserDepartment extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function department(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    protected static function newFactory(): UserDepartmentFactory
    {
        return UserDepartmentFactory::new();
    }
}
