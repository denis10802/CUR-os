<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Domain\User\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

final class RootUserSeeder extends Seeder
{
    public function run(): void
    {
        $user = new User();
        $user->first_name = 'Admin';
        $user->last_name = 'Admin';
        $user->email = 'admin@admin.ru';
        $user->password = Hash::make('admin');
        $user->has_root_access = true;
        $user->save();
    }
}
