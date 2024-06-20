<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'no_anggota' => 3,
                'name'=> 'Odre',
                'role'=> 'bendahara',
                'password' => bcrypt('123')
            ],
            [
                'no_anggota' => 1,
                'name' => 'John',
                'role' => 'ketua',
                'password' => bcrypt('123')
            ],
            [
                'no_anggota' => 6,
                'name' => 'Dan',
                'role' => 'anggota',
                'password' => bcrypt('123')
            ],
            [
                'no_anggota' => 4,
                'name' => 'Han',
                'role' => 'sekretaris',
                'password' => bcrypt('123')
            ],
            [
                'no_anggota' => 5,
                'name' => 'Pan',
                'role' => 'pengawas',
                'password' => bcrypt('123')
            ]

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
