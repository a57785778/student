<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name='黃俊耀';
        $email='a577iuu88@gmail.com';
        $password='˙12345';
        
        $user=\App\Service\UserService::create($name,$email,$password);

        $name='楊芷霖';
        $email='a57785778@gmail.com';
        $password='˙sa1217606';
        
        $user=\App\Service\UserService::create($name,$email,$password);

        $name='卓君飛';
        $email='a58899@gmail.com';
        $password='˙012345';
        
        $user=\App\Service\UserService::create($name,$email,$password);
    }
}
