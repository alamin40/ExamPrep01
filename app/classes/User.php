<?php
namespace App\classes;
class User
{
    public function getAllUser(){
        return [
            0 => [
                'id'          => 1,
                'name'        => 'Admin One',
                'email'       =>  'admin@gmail.com',
                'password'    =>  '123456',
            ],
            1 => [
                'id'          => 2,
                'name'        => 'Admin Two',
                'email'       =>  'admin2@gmail.com',
                'password'    =>  '012345',
            ],

        ];
    }
}