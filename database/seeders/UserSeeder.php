<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        $user  = new User();
        $user->name = 'Ulaş Körpe';
        $user->email = 'ulaskorpe@gmail.com';
        $user->email_verified_at = now();
        $user->password = md5('123123');
        $user->user_type = UserType::Sudo;
        $user->save();

        $user  = new User();
        $user->name = 'Baran Saruhan';
        $user->email = 'baransaruhan@gmail.com';
        $user->email_verified_at = now();
        $user->password = md5('123123');
        $user->user_type = UserType::Admin;
        $user->save();

        $faker = Factory::create();
        for($i=0;$i<100;$i++){
            $user  = new User();
            $user->name = $faker->name;
            $user->email = $faker->email;
            $user->email_verified_at = now();
            $user->password = md5('123123');
            $user->user_type = UserType::User;
            $user->save();
        }
    }
}
