<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateSuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $superUser = User::create([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => Hash::make('1234567890'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        Permission::create(['name'=>'show teacher']);
        Permission::create(['name'=>'add teacher']);
        Permission::create(['name'=>'edit teacher']);
        Permission::create(['name'=>'delete teacher']);
        Permission::create(['name'=>'create-comment']);
        Permission::create(['name'=>'delete-comment']);
        Permission::create(['name'=>'edit-comment']);
        Role::create([
            'name' => 'super-user',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
///php artisan db:seed --class=CreateSuperUser.php
///
