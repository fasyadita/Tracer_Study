<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan beberapa admin
        $admins = [
            [
                'username' => 'admin',
                'password' => Hash::make('adminpassword'),
                'role' => 'admin',
                'first_name' => 'Admin',
                'last_name' => 'Administrator',
                'email' => 'admin@example.com',
                'phone_number' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'superadmin',
                'password' => Hash::make('superadminpassword'),
                'role' => 'admin',
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'email' => 'superadmin@example.com',
                'phone_number' => '0987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'admin1',
                'password' => Hash::make('admin1password'),
                'role' => 'admin',
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john.doe@example.com',
                'phone_number' => '1122334455',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        // Menambahkan data admin ke dalam tabel users
        foreach ($admins as $admin) {
            User::create($admin);
        }
    }
}

