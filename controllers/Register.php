<?php namespace RegisterForm;

class Register{
    public static function checkUserDataIsValid($user_data){
        return (
            in_array("", $user_data)
            || $user_data['confirmPassword'] != $user_data['password']
            || !preg_match("/@/", $user_data['email'] )
            ) ? false : true;
    }

    public static function ckeckIfUserExist($user_data){
        $registered_users       = \Users::getUsers();
        $registered_users_email = array_column($registered_users, 'email');

        if( in_array( $user_data['email'], $registered_users_email) ){
            \LOG::RegisterLog(date('H:i:s') .' | ' .$user_data['email'].' user exist'."\n" );
            return true;
        }
        return false;
    }

    public static function registerUser($user_data){
        \Users::createNewUser($user_data);
        \LOG::RegisterLog(date('H:i:s') .' | ' .$user_data['email'].' user registered success'."\n" );
    }

}

class_alias('RegisterForm\Register', 'Regiser');