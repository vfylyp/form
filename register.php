<?php

    require_once('controllers/LOG.php');
    require_once('controllers/Users.php');
    require_once('controllers/Register.php');

    use RegisterForm\Register;
    use RegisterForm\Users;

    $user_data = [ 
        'firstName'         => trim($_POST['firstName']),
        'lastName'          => trim($_POST['lastName']),
        'password'          => $_POST['password'],
        'confirmPassword'   => $_POST['confirmPassword'],
        'email'             => trim($_POST['email']),
    ];

    if( !Register::checkUserDataIsValid($user_data) ){
        http_response_code(400);
        echo json_encode( ["error"=> "Please fill in all fields"]);
        exit;
    }

    if( Register::ckeckIfUserExist( $user_data ) ){
        http_response_code(409);
        echo json_encode( ["error"=> "User alredy exists"]);
        exit;
    }

    Register::registerUser( $user_data );
    echo json_encode( ["message"=> "Register success✔. \nThank you!"]);
    exit;

?>