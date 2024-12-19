<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([
            'name' => 'admin'
        ]);

        $buyerRole = Role::create([
            'name' => 'buyer'
        ]);

        $user1 = User::create([
            'name' => 'Fikri',
            'email' => 'fikri@admin',
            'password' => bcrypt('medicalic')
        ]);

        $user2 = User::create([
            'name' => 'Fahrezy',
            'email' => 'fahrezy@admin',
            'password' => bcrypt('medicalic')
        ]);

        $user3 = User::create([
            'name' => 'Akhdan',
            'email' => 'akhdan@admin',
            'password' => bcrypt('medicalic')
        ]);

        $user1->assignRole($ownerRole);
        $user2->assignRole($ownerRole);
        $user3->assignRole($ownerRole);
    }
}
