<?php

namespace App\Domain\User\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * App\Domain\User\Models\User.
 *
 * @property int                                                                                                       $id
 * @property string                                                                                                    $first_name
 * @property string                                                                                                    $last_name
 * @property string                                                                                                    $email
 * @property string                                                                                                    $password
 * @property int                                                                                                       $has_root_access
 * @property string|null                                                                                               $remember_token
 * @property \Illuminate\Support\Carbon|null                                                                           $created_at
 * @property \Illuminate\Support\Carbon|null                                                                           $updated_at
 * @property \App\Domain\User\Models\UserDepartment|null                                                               $department
 * @property \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property int|null                                                                                                  $notifications_count
 *
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
final class User extends Authenticatable
{
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function department(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(UserDepartment::class);
    }

    protected static function newFactory(): UserFactory
    {
        return UserFactory::new();
    }
}
