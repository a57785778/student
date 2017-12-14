<?php

class UserService
{
    public function create($name,$email,$password)
    {
        
        $user=User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        return $user;
    }
}