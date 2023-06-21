<?php
session_start();
error_reporting(0);
require_once 'auxiliaries.php';

$requestMethod = $_SERVER['REQUEST_METHOD'];
$loginError = "";

if ($requestMethod == 'POST') {
    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        // Call the userLogin function
        $result = userLogin($email, $password);

        if (!$result['errors']) {

            $_SESSION['email'] = $result['email'];
            header('location:dashboard.php');
            // echo $result['password'] . " " . $result['email'];
            // echo $result['message'];
        } else {

            $loginError = $result['errors'];
            $_SESSION['loginError'] = $loginError;
            header('location:index.php');
        }
    } else {
        $loginError = "Please fill all fields";
        $_SESSION['loginError'] = $loginError;
        header('location:index.php');
    }
}
?>