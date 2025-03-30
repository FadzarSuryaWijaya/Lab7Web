<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Data user yang mau di-seed
        $data = [
            [
                'username'     => 'admin',
                'useremail'    => 'admin@email.com',
                'userpassword' => password_hash('admin123', PASSWORD_DEFAULT),
            ],
            [
                'username'     => 'user1',
                'useremail'    => 'user1@email.com',
                'userpassword' => password_hash('user1234', PASSWORD_DEFAULT),
            ],
        ];

        // Panggil model UserModel
        $userModel = model('UserModel');

        // Truncate di awal kalau mau reset data
        $userModel->truncate(); // Optional: Hati-hati di production!

        // Loop buat insert semua data
        foreach ($data as $user) {
            $userModel->insert($user);
        }

        echo "UserSeeder selesai di-run!\n";
    }
}
