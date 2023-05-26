<?php namespace RegisterForm;

class Users{
    public static $users = [
        [
            'id'            => 1,
            'first-name'    => 'John',
            'last-name'     => 'Smith',
            'email'         => 'john.smith@example.com',
            'password'      => 'jSf2Gd4',
        ],
        [
            'id'            => 2,
            'first-name'    => 'Emma',
            'last-name'     => 'Johnson',
            'email'         => 'emma.johnson@example.com',
            'password'      => 'eJg8Kp1',
        ]
    ];

    public static function getUsers(){
        return static::$users;
    }

    public static function createNewUser($new_user){
        $new_user['id'] = count(self::$users) + 1;
        unset($new_user['confirmPassword']);
        self::$users[] = $new_user;
        return true;
    }
}

class_alias('RegisterForm\Users', 'Users');