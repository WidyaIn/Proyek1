<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Widya Indah Puspita Sari',
                'email' => 'widyain@gmail.com',
                'password' => Hash::make('1111')
            ],
            [
                'name' => 'Nasyawa Ramadhia',
                'email' => 'nasyawa@gmail.com',
                'password' => Hash::make('2222')
            ],
            [
                'name' => 'Nuril Haidar',
                'email' => 'nuril@gmail.com',
                'password' => Hash::make('3333')
            ]
        ]);
    }
}
