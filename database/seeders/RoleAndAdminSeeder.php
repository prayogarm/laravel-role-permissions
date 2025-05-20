<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleAndAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $marketing = Role::firstOrCreate(['name' => 'Marketing']);
        $designer = Role::firstOrCreate(['name' => 'Designer']);

        // Buat user Admin
        $user = User::firstOrCreate([
            'email' => 'prayogarm@gmail.com',
        ], [
            'name' => 'Rama P',
            'password' => Hash::make('password'), // Ganti password jika perlu
        ]);

        $user->assignRole($admin);
    }
}
