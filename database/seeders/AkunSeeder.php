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
                'username' => 'admin',
                'level' => 'admin',
                'password' => bcrypt('123'),
            ],
            
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
