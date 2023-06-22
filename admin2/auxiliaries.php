<?php

include('./database/db_connect.php');

// User login function
function userLogin($email, $password)
{
    global $con;
    $result = array('errors' => false);

    $getUserQuery = "SELECT * FROM users WHERE email = :email AND password = :password";
    $statement = $con->prepare($getUserQuery);
    $statement->execute([':email' => $email, ':password' => $password]);
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user) {
       
        $result['errors'] = false;
        $result['message'] = 'Login Successful!';
        $result['email'] =  $user['email'];

        return $result;
    } else {
        $result['errors'] = true;
    $result['errors'] = 'Invalid email or password!';
    return $result;
    }
    
}
