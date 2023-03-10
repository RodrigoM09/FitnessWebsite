<?php
require '../config/database.php';

//Get signup form data if signup button was clicked
if(isset($_POST['submit'])){
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];
    var_dump($avatar);

    //Check input values
    if(!$firstname) {
        $_SESSION['signup'] = "Please enter your first name.";
    } elseif (!$lastname) {
        $_SESSION['signup'] = "Please enter your last name.";
    } elseif (!$username) {
        $_SESSION['signup'] = "Please enter your username.";
    } elseif (!$email) {
        $_SESSION['signup'] = "Please enter a valid email.";
    } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Password should eight or more characters.";
    } elseif (!$avatar['name']) {
        $_SESSION['signup'] = "Please add an image.";
    }else {
        //Check password match
        if($createpassword !== $confirmpassword){
            $_SESSION['signup'] = "Passwords do not match";
        } else {
            //Hash Password
            $hash_password = password_hash($createpassword, PASSWORD_DEFAULT);
            $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email'";
            $user_check_result = mysqli_query($connection, $user_check_query);
            if(mysqli_num_rows($user_check_result) > 0){
                $_SESSION['signup'] = "Username or Email already exists.";
            } else {
                //AVATAR
                
            }
        }
    }
} else {
    // If page was accessed with out click
    header('location: ' . ROOT_URL . 'views/signup.php');
    die();
}

?>