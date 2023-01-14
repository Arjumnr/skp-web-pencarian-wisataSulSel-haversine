<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => ' Pak Admin',
                'username' => 'admin',
                'password' => bcrypt('123'),
                'role' => 1,
            ],

            [
                'name' => 'Pak tourgide',
                'username' => 'tg',
                'password' => bcrypt('123'),
                'role' => 2,
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
