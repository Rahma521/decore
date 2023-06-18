<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            ['user_name' =>'Rahma',
            'email'=>'admin@gmail.com',
            'phone'=>'01010101010',
            'password'=> bcrypt('12341234'),
            'terms'=>'1']
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
